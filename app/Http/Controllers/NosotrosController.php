<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nosotros.create');
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

        $ruta_imagen=$request['imagen']->store('nosotros','public');
        $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(600,300);
        $img->save();
        $nosotros=new Nosotros($data);
        $nosotros->imagen=$ruta_imagen;
        $nosotros->user_id=Auth()->user()->id;
        $nosotros->save();
        return redirect()->action([HomeController::class,'index'])->with('estado','Accion realizada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function show(Nosotros $nosotros)
    {
        return view('nosotros.show',compact('nosotros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function edit(Nosotros $nosotros)
    {
        return view('nosotros.edit',compact('nosotros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nosotros $nosotros)
    {
        $data=$request->validate([
            'titulo'=>'required',
            'descripcion'=>'required'
        ]);
        if(request('imagen')){
            $ruta_imagen=$request['imagen']->store('nosotros','public');
            $img=Image::make(public_path("storage/{$ruta_imagen}"))->fit(600,300);
            $img->save();
            $nosotros->imagen=$ruta_imagen;
        }
        $nosotros->user_id=Auth()->user()->id;
        $nosotros->save();
        return redirect()->action([HomeController::class,'index'])->with('estado','Accion realizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nosotros  $nosotros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nosotros $nosotros)
    {
        //
    }
}
