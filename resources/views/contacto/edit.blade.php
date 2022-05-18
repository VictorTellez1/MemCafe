@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center mt-4">Contactanos para obtener informacion de los cursos</h1>
        <div class="mt-5 row justify-content-center">
            <form
                class="col-md-9 col-xs-12 card card-body"
                action="{{route('contacto.update',['contacto'=>$contacto->id])}}"
                method="POST"
                enctype="multipart/form-data"
            >
            @csrf
            @method("PUT")
                <fieldset class="border p-4">
                    <div class="form-group">
                        <label for="nombre" class="h4">Nombre</label>
                        <input
                            type="text"
                            id="nombre"
                            class="form-control @error('nombre') is-invalid @enderror"
                            placeholder="Ingresa tu nombre"
                            value="{{$contacto->nombre}}"
                            name="nombre"
                            readonly
                        >
                        @error('nombre')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="h4">Apellido</label>
                        <input
                            type="text"
                            id="apellido"
                            class="form-control @error('apellido') is-invalid @enderror"
                            placeholder="Ingresa tu apellido"
                            value="{{$contacto->apellido}}"
                            name="apellido"
                            readonly
                        >
                        @error('apellido')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="h4">Telefono</label>
                        <input
                            type="number"
                            id="telefono"
                            class="form-control @error('telefono') is-invalid @enderror"
                            placeholder="Ingresa tu telefono"
                            value="{{$contacto->telefono}}"
                            name="telefono"
                            readonly
                        >
                        @error('telefono')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="Correo" class="h4">Correo</label>
                        <input
                            type="email"
                            id="correo"
                            class="form-control @error('correo') is-invalid @enderror"
                            placeholder="Ingresa tu correo"
                            value="{{$contacto->correo}}"
                            name="correo"
                            readonly
                        >
                        @error('correo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="h4 mt-3">Escribenos cuando quires que te contactemos y sobre que require info</label>
                        <input
                            id="descripcion"
                            type="hidden"
                            name="descripcion"
                            value="{{$contacto->descripcion}}"
                            class="form-control @error('descripcion') is-invalid @enderror"
                            readonly
                            >
                        <trix-editor input="descripcion"></trix-editor>
                        @error('descripcion')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="contacto" class="h4">Contacto</label>
                        <select
                            class="form-control @error('contacto') is-invalid @enderror"
                            name="contacto"
                            id="contacto"
                            name="contacto"
                        >
                            <option value="" selected disabled>--Seleccione una opcion--</option>
                            <option value="0">No contactado</option>
                            <option value="1">Contactado</option>
                        </select>
                        @error('contacto')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                </fieldset>
                 <input type="submit" class="btn btn-primary mt-3 d-block" value="Contactar">
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
@endsection
