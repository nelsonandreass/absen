<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Berita;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $name = Auth::user()->name;
        $beritaumum = Berita::where('wadah',"umum")->orderBy('created_at','desc')->first();
        $beritabic = Berita::where('wadah',"bic")->orderBy('created_at','desc')->first();
        $beritayouth = Berita::where('wadah',"youth")->orderBy('created_at','desc')->first();
        if(is_null($beritaumum)){
            $beritaumum =  "";
        }
        if(is_null($beritabic)){
            $beritabic = "";
        }
        if(is_null($beritayouth)){
            $beritayouth = "";
        }
        return view('home.index' ,['active' => "Home" ,'name' => $name , 'beritaumum' => $beritaumum , 'beritabic' => $beritabic , 'beritayouth' => $beritayouth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
