<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Absen;
Use App\Ibadah;
Use App\Berita;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superadmin.index');
    }
    //absen
    public function ibadah(){
        return view('superadmin.ibadah');
    }

    public function absenProcess(Request $request){
        $ibadah_id = $request->input('ibadah_id');
        $user_id = $request->input('user_id');
        $user_name = $request->input('user_name');
        $jenis = $request->input('jenis');
        $date = date('d/m/Y');

        $data = new Absen();
        $data->ibadah_id = $ibadah_id;
        $data->user_id = $user_id;
        $data->user_name = $user_name;
        $data->jenis = $jenis;
        $data->tanggal = $date;
        $data->save();
        $user = Absen::with(['users'])->where('user_id',$user_id)->first();

        foreach($user->users as $key => $userdata){
            $response = array(
                "name" => $userdata->name,
                "foto" => $userdata->foto,
                "greet" => "Selamat Beribadah"
            );
        }

        // $response = array(
        //     "name" => "Nelson",
        //     "greet" => "Selamat Beribadah"
        // );
        return json_encode($response);
    }

        //tidak di pakai
        public function buatIbadah(Request $request){
            $jenis = $request->input('jenis');
            $data = new Ibadah();
            $data->jenis_ibadah = $jenis;
            $data->save();
            return redirect('/absen')->with('jenis' , $jenis);
        }

        public function absen(){

            $jenis = session()->get('jenis');
            return view('superadmin.absen' , ['jenis' => $jenis]);
        }

    //end of absen

    //jemaat
    public function listjemaat(){
        $users = User::where('role' , 'user')->orderBy('name','asc')->get();
        return view('superadmin.listjemaat' , ['users' => $users]);
    }

    public function showjemaat($id){
        $data = User::find($id);

        return view('superadmin.showjemaat' , ['datas' => $data]);
    }

    public function updatejemaat(Request $request){
        $id = $request->input('id');
        $email = $request->input('email');
        $telepon = $request->input('telepon');
        $alamat = $request->input('alamat');
        $nokeluarga = $request->input('nokeluarga');
        $foto = $request->file('foto');
       

        if(!is_null($foto)){
            $namafoto = $foto->getClientOriginalName();
            $save = Storage::putFileAs('public',$foto, $namafoto);
            $array = array(
                'email' => $email,
                'nomor_telepon' => $telepon,
                'alamat' => $alamat,
                'no_keluarga' => $nokeluarga,
                'foto' => $namafoto
            );
        }
        else{
            $array = array(
                'email' => $email,
                'nomor_telepon' => $telepon,
                'alamat' => $alamat,
                'no_keluarga' => $nokeluarga,
               
            );
        }
        
        $user = User::where('id', $id)->update($array);
        return redirect('/listjemaat');
    }
    //end of jemaat

    //berita
    public function berita(){
        $datas = Berita::get();
        return view('superadmin.berita' , ['datas' => $datas]);
    }

    public function createBerita(){
        return view('superadmin.createberita');
    }

    public function createBeritaProcess(Request $request){
        $judul = $request->input('judul');
        $berita = $request->input('berita');
        $wadah = $request->input('wadah');

        $data = new Berita();
        $data->judul = $judul;
        $data->berita = $berita;
        $data->wadah = $wadah;
        $data->save();

        return redirect('/berita');
    }

    public function updateBerita($id){
        $data = Berita::where('id', $id)->first();
        return view('superadmin.updateberita', ['berita' => $data]);
    }

    public function updateBeritaProcess(Request $request){
        $id = $request->input('id');
        $judul = $request->input('judul');
        $berita = $request->input('berita');
        $wadah = $request->input('wadah');
        $data = Berita::where('id',$id)->update([
            'judul' => $judul,
            'berita' => $berita,
            'wadah' => $wadah
        ]);
        return redirect('/berita');
    }
    //end of berita


    public function test(){
        $absen = Absen::with(['users'])->get();
        return view('superadmin.kartu');
    }

    public function testprocess(Request $request){
        $kartu = $request->input('kartu');

        $absen = Absen::with('users')->where('user_id',$kartu)->first();
        foreach($absen->users as $key =>  $data){
            $response = array(
                "name" => $data->name,
                "foto" =>$data->foto,
                "greet" => "Selamat Beribadah"
            );
        }
        
        echo json_encode($response);

    }
    
    public function getAbsen(){
        $datas = DB::table('absens')->select('tanggal',DB::raw('count(id) as total'))->orderBy('tanggal','asc')->groupBy('tanggal')->get();
        dd($datas);
    }

    public function upload(){
        return view('superadmin.upload');
    }
    public function uploadprocess(Request $request){
        $excel = $request->file('excel');
        // $name =$excel->getClientOriginalName();
        // $save = Storage::putFileAs('public',$excel, $name);
        $rows = Excel::toArray(new UsersImport,$excel);
        for($i = 0 ; $i < sizeof($rows[0]) ; $i++){
            if(!is_null($rows[0][$i][6])){
                $ttl = explode("," , $rows[0][$i][6]);
            }
           
            $user = new User();
            $user->name = $rows[0][$i][0];
            $user->email = $rows[0][$i][0].$ttl[1].'@gmail.com';
            $user->password = $rows[0][$i][0];
            $user->jenis_kelamin = $rows[0][$i][4];
            $user->status_pernikahan = $rows[0][$i][5];
            $user->alamat = $rows[0][$i][7];
            if(!is_null($rows[0][$i][6])){
                $user->tanggal_lahir = $ttl[1];
                $user->tempat_lahir = $ttl[0];
            }
            $user->nomor_telepon = $rows[0][$i][8];
            $user->save();
        }
       
        // dd($rows[0][1]);
    }

    public function uploadfoto(){
        return view('superadmin.uploadfoto');
    }
    public function uploadfotoprocess(Request $request){
        $foto = $request->file('foto');
        $name = $foto->getClientOriginalName();
        $save = Storage::putFileAs('public',$foto, $name);

        $data = User::where('email' , 'nelson@gmail.com')->update([
            'foto' => $name
        ]);

    }
}

