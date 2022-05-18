@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">Editar entrada de un blog</h1>
        <div class="mt-5 row justify-content-center">
            <form
                class="col-md-9 col-xs-12 card card-body"
                action="{{route('blog.update',['blog'=>$blog->id])}}"
                method="POST"
                enctype="multipart/form-data"
            >
            @csrf
            @method("PUT")
                <fieldset class="border p-4">
                    <div class="form-group">
                        <label for="titulo" class="h4">Editar el titulo del blog</label>
                        <input
                            type="text"
                            id="titulo"
                            class="form-control @error('titulo') is-invalid @enderror"
                            placeholder="Titulo del curso"
                            value="{{$blog->titulo}}"
                            name="titulo"
                        >
                        @error('titulo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="imagen" class="h4 mt-3">Imagen del blog</label>
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
                        <img src="/storage/{{$blog->imagen}}" style="width: 300px">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="h4 mt-3">Descripción</label>
                        <input
                            id="descripcion"
                            type="hidden"
                            name="descripcion"
                            value="{{$blog->descripcion}}"
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
                        <label for="editor" class="h4">Editor del blog</label>
                        <input
                            type="text"
                            id="editor"
                            class="form-control @error('editor') is-invalid @enderror"
                            placeholder="editor"
                            value="{{$blog->editor->name}}"
                            name="editor"
                            readonly
                        >
                    </div>
                <input type="submit" class="btn btn-primary mt-3 d-block" value="Guardar Cambios">
                </fieldset>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
