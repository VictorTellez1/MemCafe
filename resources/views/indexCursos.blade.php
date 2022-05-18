@extends('layouts.app')
@section('content')
    <div class="container mb shadow rounded">
        <h1 class="text-center mt-5 p-3">Cursos y talleres</h1>
        <div class="row mt-5 ">
            @foreach ($cursos as $curso)
                <div class="card col-md-6 mt-3" >
                    <img src="/storage/{{$curso->imagen}}" class="card-img-top" alt="imagen curso " >
                    <div class="card-body mt-3 mb-3">
                        <h2><strong>{{$curso->titulo}}</strong></h2>
                        @if ($curso->precio=='0')
                                <p class="h4 mt-2 mb-2"><strong>Precio : Gratis</strong></p>
                            @else
                                <p class="h4 mt-2"><strong>Precio : ${{$curso->precio}}</strong></p>
                            @endif
                        <p class="h4 mt-2"> <strong>Cupo : {{$curso->cupo}}</strong></p>
                        <a href="{{route('cursos.show',['cursos'=>$curso->id])}}" type="submit" class="btn btn-primary mt-4 d-block p-3 ">Ver más</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
