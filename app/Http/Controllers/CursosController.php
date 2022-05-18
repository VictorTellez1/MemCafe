<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=auth()->user()->id;
        $cursos=Cursos::where('user_id',$usuario)->paginate(2);
        return view('cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario=Auth()->user()->name;
        return view('cursos.create',compact('usuario'));
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
            'precio'=>'required|numeric',
            'cupo'=>'required|numeric',
            'imagen'=>'required|image',
            'descripcion'=>'required|min:30'
        ]);
        $ruta_imagen=$request['imagen']->store('cursos','public');
        $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(800,600);
        $img->save();
        $cursos=new Cursos($data);
        $cursos->imagen=$ruta_imagen;
        $cursos->user_id=Auth()->user()->id;
        $cursos->save();
        return redirect()->action([HomeController::class,'index'])->with('estado','Accion realizada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $cursos)
    {
        return view('cursos.show',compact('cursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cursos $cursos)
    {
        return view('cursos.edit',compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursos $cursos)
    {
        //Revisar el policy
        $this->authorize('update',$cursos);
        $data=$request->validate([
            'titulo'=>'required',
            'precio'=>'required|numeric',
            'cupo'=>'required|numeric',
            'descripcion'=>'required|min:30'
        ]);
        $cursos->titulo=$data['titulo'];
        $cursos->precio=$data['precio'];
        $cursos->cupo=$data['cupo'];
        $cursos->descripcion=$data['descripcion'];
        if(request('imagen')){
            $ruta_imagen=$request['imagen']->store('cursos','public');
            //Resize a la imagen
            $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(800,600);
            $img->save();
            $cursos->imagen=$ruta_imagen;
        }
        $cursos->save();
        return redirect()->action([HomeController::class,'/'])->with('estado','En breve sera contactado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursos $cursos)
    {
        $this->authorize('delete',$cursos);
        $cursos->delete();
    }
}
