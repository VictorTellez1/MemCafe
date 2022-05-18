<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=auth()->user()->id;
        $blogs=Blog::where('user_id',$usuario)->paginate(2);
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario=Auth()->user()->name;
        return view('blog.create',compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'titulo'=>'required',
            'imagen'=>'required|image',
            'descripcion'=>'required|min:50'
        ]);
        $ruta_imagen=$request['imagen']->store('blog','public');
        $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(800,600);
        $img->save();
        $blog=new Blog($data);
        $blog->imagen=$ruta_imagen;
        $blog->user_id=Auth()->user()->id;
        $blog->save();
        return redirect()->action([HomeController::class,'index'])->with('estado','Accion realizada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update',$blog);
        $data=$request->validate([
            'titulo'=>'required',
            'descripcion'=>'required|min:50'
        ]);
        $blog->titulo=$data['titulo'];
        $blog->descripcion=$data['descripcion'];
        if(request('imagen')){
            $ruta_imagen=$request['imagen']->store('blog','public');
            $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(800,600);
            $img->save();
            $blog->imagen=$ruta_imagen;
        }
        $blog->save();
        return redirect()->action([HomeController::class,'index'])->with('estado','Accion realizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->authorize('destroy',$blog);
        $blog->delete();
    }
}
