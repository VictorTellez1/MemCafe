@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-5">Personas por llamar</h2>
    <div class="col-md-7 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th class="text-center" scole="col">Nombre</th>
                    <th class="text-center" scole="col">Telefono</th>
                    <th class="text-center" scole="col">Correo</th>
                    <th class="text-center" scole="col">Acciones</th>
                </tr>
                <tbody>
                    @foreach ($contactos as $contacto)
                    <tr>
                        <td class="h4 text-center">{{$contacto->nombre." ".$contacto->apellido}}</td>
                        <td class="h4 text-center">{{$contacto->telefono}}</td>
                        <td class="h4 text-center">{{$contacto->correo}}</td>
                        <td>
                            <a href="{{route('contacto.edit',['contacto'=>$contacto->id])}}" class="btn btn-success mr-1 d-block  text-align-center">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{-- {{$contactos->links()}} --}}
        </div>
    </div>
@endsection
