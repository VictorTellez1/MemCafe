@extends('layouts.app')
@section('content')
    <div class="container mb shadow rounded mb-2">
        <h1 class="text-center mt-5 p-3">Entradas de Blog</h1>
        <div class="row mt-5">
            @foreach ($blogs as $blog)
                <div class="card col-md-6 mt-3" >
                    <img src="/storage/{{$blog->imagen}}" class="card-img-top" alt="imagen blog " >
                    <div class="card-body mt-3">
                        <h2><strong>{{$blog->titulo}}</strong></h2>
                        <span class="d-inline-block text-truncate h4" style="max-width: 500px;">{!!$blog->descripcion!!}</span>
                        <a href="{{route('blog.show',['blog'=>$blog->id])}}" type="submit" class="btn btn-primary mt-3 d-block p-3">Leer más</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

