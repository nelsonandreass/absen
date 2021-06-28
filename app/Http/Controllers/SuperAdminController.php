<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Absen;
Use App\Ibadah;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superadmin.index');
    }
    public function ibadah(){
        
        
        return view('superadmin.ibadah');
    }
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
        
        return "Selamat Beribadah";
    }
    public function listjemaat(){
        $users = User::where('role' , 'user')->get();
        return view('superadmin.listjemaat' , ['users' => $users]);
    }

    public function getAbsen(){
        $datas = DB::table('absens')->select('tanggal',DB::raw('count(id) as total'))->orderBy('tanggal','asc')->groupBy('tanggal')->get();
        dd($datas);
    }
}

