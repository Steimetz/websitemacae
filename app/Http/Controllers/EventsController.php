<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index')->with('eventos', $eventos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
            'data'=>'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        // upload da imagem
        if($request->hasFile('cover_image')){
            // nome do arquivo com a extensão
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // só o nome do arquivo
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // só extensão
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // guardar o nome do arquivo
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // upload do arquivo
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $evento = new Evento;
        $evento->name = $request->input('name');
        $evento->body = $request->input('body');
        $evento->data = $request->input('data');
        $evento->data = $request->input('link');
       // $evento->user_id = auth()->user()->id;
        $evento->cover_image = $fileNameToStore;
        $evento->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);
        return view('eventos.show')->with('evento',$evento);
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
