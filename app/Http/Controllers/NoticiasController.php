<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Evento;
class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('noticias.index')->with('posts', $posts);
    }
    public function index_dashboard()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('noticias.dash_index')->with('posts', $posts);
    }
    public function inicial()
    {
        $noticias = Post::all()->paginate(3);
        $eventos = Evento::all()->paginate(2);
        return view('index')->with('noticias', $noticias)->with('eventos', $eventos);
    }
  
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('noticias.create');
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
            'titulo' => 'required',
            'body' => 'required',
            'descricao'=>'required',
            'cover_image_noticias   ' => 'image|nullable|max:1999'
        ]);
        // upload da imagem
        if($request->hasFile('cover_image_noticias')){
            // nome do arquivo com a extensão
            $filenameWithExt = $request->file('cover_image_noticias')->getClientOriginalName();
            // só o nome do arquivo
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // só extensão
            $extension = $request->file('cover_image_noticias')->getClientOriginalExtension();
            // guardar o nome do arquivo
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // upload do arquivo
            $path = $request->file('cover_image_noticias')->storeAs('public/cover_images_noticias', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $noticia = new Post;
        $noticia->titulo = $request->input('titulo');
        $noticia->body = $request->input('body');
        $noticia->descricao = $request->input('descricao');
        $noticia->cover_image_noticias = $fileNameToStore;
        $noticia->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('noticias.show')->with('post',$post);
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

