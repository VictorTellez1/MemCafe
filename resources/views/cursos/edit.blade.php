@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">Registrar Cursos</h1>
        <div class="mt-5 row justify-content-center">
            <form
                class="col-md-9 col-xs-12 card card-body"
                action="{{route('cursos.update',['cursos'=>$cursos->id])}}"
                method="POST"
                enctype="multipart/form-data"
            >
            @csrf
            @method("PUT")
                <fieldset class="border p-4">
                    <legend class="text-primary text-center h2">Informacion sobre el curso</legend>
                    <div class="form-group">
                        <label for="titulo" class="h4">Ingrese el titulo del curso</label>
                        <input
                            type="text"
                            id="titulo"
                            class="form-control @error('titulo') is-invalid @enderror"
                            placeholder="Titulo del curso"
                            value="{{$cursos->titulo}}"
                            name="titulo"
                        >
                        @error('titulo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio" class="h4">Ingrese el precio del curso</label>
                        <input
                            type="number"
                            id="titulo"
                            class="form-control @error('precio') is-invalid @enderror"
                            placeholder="Precio del curso"
                            value="{{$cursos->precio}}"
                            name="precio"
                        >
                        @error('precio')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="cupo" class="h4">Ingrese el cupo del curso</label>
                        <input
                            type="number"
                            id="cupo"
                            class="form-control @error('cupo') is-invalid @enderror"
                            placeholder="Cupo del curso"
                            value="{{$cursos->cupo}}"
                            name="cupo"
                        >
                        @error('cupo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="h4 mt-3">Imagen del curso</label>
                        <input
                            type="file"
                            id="imagen"
                            class="form-control @error('imagen') is-invalid @enderror"
                            name="imagen"
                        >
                        @error('imagen')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="mt-4">
                        <p>Imagen actual:</p>
                        <img src="/storage/{{$cursos->imagen}}" style="width: 300px">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="h4 mt-3">Descripción</label>
                        <input
                            id="descripcion"
                            type="hidden"
                            name="descripcion"
                            value="{{$cursos->descripcion}}"
                            class="form-control @error('descripcion') is-invalid @enderror"

                            >
                        <trix-editor input="descripcion"></trix-editor>
                        @error('descripcion')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="editor" class="h4">Editor del curso</label>
                        <input
                            type="text"
                            id="editor"
                            class="form-control @error('editor') is-invalid @enderror"
                            placeholder="editor"
                            value="{{$cursos->editor->name}}"
                            name="editor"
                            readonly
                        >
                    </div>
                <input type="submit" class="btn btn-primary mt-3 d-block" value="Registrar Especialidad">
                </fieldset>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection

