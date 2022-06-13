<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data_mahasiswa()
    {   
        $title = "Data Mahasiswa";
        $mahasiswa = mahasiswa::all();
        return view('data_mahasiswa', ['mahasiswa' => $mahasiswa], compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input_data()
    {
        $title = "Input Data";
        return view('input_data', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
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
        $title = "Input Data";
        $mahasiswa = mahasiswa::find($id);
        return view('edit',compact(['mahasiswa','title']));
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
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/data_mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/data_mahasiswa');
    }
    public function about_me()
    {
        $title = "About Me";
        return view('about_me', compact('title'));
    }

    public function submit_data(Request $request)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nrp = $request->nrp;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->email = $request->email;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->save();
        return redirect('/data_mahasiswa');
    }

    
    
}
