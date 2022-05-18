@extends('layouts.app')
@section('content')
        <h1 class="text-center mb-4 font-weight-bold">{{$nosotros->titulo}}</h1>
        <div class="container ">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="col-md-6 p-5 mx-auto">
                    <img src="/storage/{{$nosotros->imagen}}" class="w-70 img-fluid">
                </div>
                <div class="col-md-6 mx-auto my-auto text-center ">
                    <H2 class="text-center text-md">Acerca de nosotros: </H2>
                    <div class="text-align-center mt-5 text-secundary h4">
                        <p class="h3">{!!$nosotros->descripcion!!}
                    <div>
                </div>
            </div>
        </div>
@endsection
