@extends('layouts.app')

@section('content')
    <h2 class="text-center mb-5">Administrar los cursos</h2>
    <div class="col-md-7 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th class="text-center" scole="col">Nombre</th>
                    <th class="text-center" scole="col">Imagen</th>
                    <th class="text-center" scole="col">Acciones</th>
                </tr>
                <tbody>
                    @foreach ($cursos as $curso)
                    <tr>
                        <td class="h4 text-center">{{$curso->titulo}}</td>
                        <td><img src="/storage/{{$curso->imagen}}" width="100" height="100"></td>
                        <td>
                            <eliminar-curso
                                curso-id={{$curso->id}}
                            ></eliminar-curso>


                            <a href="{{route('cursos.edit',['cursos'=>$curso->id])}}" class="btn btn-success mr-1 d-block mt-3">Editar</a>
                            <a href="{{route('cursos.show',['cursos'=>$curso->id])}}" class="btn btn-success mr-1 d-block mt-3">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                    <div class="mb-4 justify-content-end clear-fix">
                        <a href="{{route('cursos.create')}}" class="btn btn-danger mb-4 mr-1 d-inline">Crear nuevo Curso</a>
                    </div>
                </tbody>
            </thead>
        </table>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{$cursos->links()}}
        </div>
    </div>
@endsection
