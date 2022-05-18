@extends('layouts.app')
@section('content')
        <h1 class="text-center mb-4 font-weight-bold">{{$cursos->titulo}}</h1>
        <div class="container ">
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="col-md-6 p-5 mx-auto">
                    <img src="/storage/{{$cursos->imagen}}" class="w-70 img-fluid">
                </div>
                <div class="col-md-6 mx-auto my-auto text-center ">
                    <H2 class="text-center text-md">Informacion del taller: </H2>
                    <p class="h4 mt-3">Precio:
                        @if ($cursos->precio=='0')
                            Gratis
                        @else
                            {{$cursos->precio}}
                        @endif
                    </p>
                    <p class="h4 mt-3">Cupo: {{$cursos->cupo}}</p>
                    <div class="text-align-center mt-5 text-secundary h4">
                        <p class="h3">{!!$cursos->descripcion!!}
                            <a href="" type="submit" class="btn btn-primary mt-5 d-block p-3">Ver mas cursos</a>
                    <div>
                </div>
            </div>
        </div>
@endsection
