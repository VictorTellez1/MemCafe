@extends('layouts.app')
@section('content')
        <div class="container ">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="col-md-6 p-5 mx-auto">
                    <img src="/storage/{{$blog->imagen}}" class="w-70 img-fluid">
                </div>
                <div class="col-md-6 mx-auto my-auto text-center ">
                    <div class="text-align-center mt-5 text-secundary h4">
                        <h1 class="text-center mb-4 font-weight-bold">{{$blog->titulo}}</h1>
                        <p class="h3">{!!$blog->descripcion!!}
                            <a href="" type="submit" class="btn btn-primary mt-3 d-block p-3">Leer mas entradas de blog</a>
                    <div>
                </div>
            </div>
        </div>
@endsection
