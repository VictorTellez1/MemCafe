@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-5">Administrar los blogs</h2>
    <div class="col-md-7 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th class="text-center" scole="col">Nombre</th>
                    <th class="text-center" scole="col">Imagen</th>
                    <th class="text-center" scole="col">Acciones</th>
                </tr>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td class="h4 text-center">{{$blog->titulo}}</td>
                        <td><img src="/storage/{{$blog->imagen}}" width="100" height="100"></td>
                        <td>

                            <eliminar-blog
                                blog-id={{$blog->id}}
                            ></eliminar-blog>

                            <a href="{{route('blog.edit',['blog'=>$blog->id])}}" class="btn btn-success mr-1 d-block mt-3">Editar</a>
                            <a href="{{route('blog.show',['blog'=>$blog->id])}}" class="btn btn-success mr-1 d-block mt-3">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                    <div class="mb-4 justify-content-end clear-fix">
                        <a href="{{route('blog.create')}}" class="btn btn-danger mb-4 mr-1 d-inline">Crear nuevo blog</a>
                    </div>
                </tbody>
            </thead>
        </table>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{$blogs->links()}}
        </div>
    </div>
@endsection
