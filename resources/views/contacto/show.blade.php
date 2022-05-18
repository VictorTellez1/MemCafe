@extends('layouts.app')
@section('content')
        <div class="container ">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="col-md-6 mx-auto my-auto text-center ">
                    <H2 class="text-center text-md">Informacion de la persona: </H2>
                    <p class="h4 mt-3">Nombre y apellido {{$contacto->nombre. " ".$contacto->apellido}}</p>
                    <p class="h4 mt-3">Telefono: {{$contacto->telefono}}</p>
                    <p class="h4 mt-3">Correo: {{$contacto->correo}}</p>
                    <div class="text-align-center mt-5 text-secundary h5">
                        <p class="h3">{!!$contacto->descripcion!!}

                    <div>
                </div>
            </div>
        </div>
@endsection
