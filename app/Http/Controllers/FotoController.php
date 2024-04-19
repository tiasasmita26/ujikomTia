<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::All();
        $album = Album::All();
        $photo = Foto::All();
        return view('admin.DataFoto', ['photo' => $photo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::All();
        $album = Album::get();
        $photo = Foto::All();
        return view('admin.TambahDataFoto', compact('album', 'user', 'photo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanggal = Carbon::now()->toDateTimeString();
        $photo = new Foto;
        $photo->JudulFoto = $request->JudulFoto;
        $photo->DeskripsiFoto = $request->DeskripsiFoto;
        $photo->TanggalUnggah = $tanggal;
        $photo->LokasiFile = $request->LokasiFile;
        $photo->AlbumID = $request->AlbumID;
        $photo->UserID = $request->UserID;

        if ($request->hasFile('file_location')) {
            $files = $request->file('file_location');
            // $path = storage_path('');
            $files_name = 
            $files->getClientOriginalName();
            $files->storeAs('public', $files_name);
            $photo->file_location = $files_name;
        }
        $photo->save();

        return redirect('DataFoto')->with('success', 'tambah data sukses!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = Foto::whereId($id)->first();
        return view('show', compact(['photo']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto = Foto::where('FotoID',$id)->get();
        return view('EditFoto',['foto' => $foto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
