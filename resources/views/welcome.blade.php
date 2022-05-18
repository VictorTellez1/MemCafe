@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <h1 class="text-secundary"><strong>Nuestro Blog</strong></h2>
            @foreach ($blogs as $blog)
                <article>
                    <div class="d-flex align-items-start flex-column bd-highlight">
                        <div class="mb-auto bd-highlight ">
                            <img class="w-100" loading="lazy" src="/storage/{{$blog->imagen}}" alt="imagen-taller">
                            <h2 class="mt-3"><strong>{{$blog->titulo}}</strong></h1>
                            <div class="h4">
                                <p>{!!$blog->descripcion!!}</p>
                            </div>
                            <a href="{{route('blog.show',['blog'=>$blog->id])}}" type="submit" class="btn btn-primary mt-3 d-block p-3">Leer entrada de blog</a>
                        </div>
                    </div>
                <hr width="100%">
                </article>
            @endforeach
        </div>
        <div class="col-sm-12 col-md-4">
            <h2><strong>Nuestros cursos y talleres</strong></h2>
            @foreach ($cursos as $curso)
                <article>
                    <div class="d-flex align-items-start flex-column bd-highlight">
                        <div class="mb-auto bd-highlight mt-2">
                            <img class="w-100" loading="lazy" src="/storage/{{$curso->imagen}}" alt="imagen-taller">
                            <h2 class="mt-3 mb-2"><strong>{{$curso->titulo}}</strong></h1>
                            @if ($curso->precio=='0')
                                <p class="h4 mt-2"><strong>Precio : Gratis</strong></p>
                            @else
                                <p class="h4 mt-2"><strong>Precio : ${{$curso->precio}}</strong></p>
                            @endif
                            <p class="h4 mt-2"> <strong>Cupo : {{$curso->cupo}}</strong></p>
                            <a href="{{route('cursos.show',['cursos'=>$curso->id])}}" type="submit" class="btn btn-primary mt-3 d-block p-3">Leer entrada de blog</a>
                        </div>
                    </div>
                <hr width="100%">
                </article>
            @endforeach
        </div>

    </div>

</div>
@endsection


