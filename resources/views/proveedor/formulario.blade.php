@extends('layout/plantilla')
@section('tituloPajina', "Crear un nuevo registro")
@section('contenido')
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ isset($equipo) ? 'Editar Equiopo' : 'Agregar Nuevo Equipo' }}</h4>
        </div>
        
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="" method="POST">
                @csrf
                @if(isset($equipo))
                    @method('PUT')
                @endif

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                   name="nombre" id="nombre" 
                                   value="{{ isset($equipo) ? $equipo->nombre : old('nombre') }}" 
                                   placeholder="Nombre del usuario" required>
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('cede') is-invalid @enderror" 
                                   name="cede" id="cede" 
                                   value="{{ isset($equipo) ? $equipo->cede : old('cede') }}" 
                                   placeholder="Cede oficial del equipo" required>
                            <label for="correo">Cede</label>
                        </div>
                    </div>
datos de contacto, información de la empresa (nombre, tipo, dirección, 
                    <div class="col-md-6">
                      <div class="form-floating">
                          <input type="text" class="form-control @error('fundador') is-invalid @enderror" 
                                 name="fundador" id="fundador" 
                                 value="{{ isset($equipo) ? $equipo->fundador : old('fundador') }}" 
                                 placeholder="Nombre del fundador" required>
                          <label for="correo">Fundador</label>
                      </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-floating">
                        <input type="date" class="form-control @error('fecha_fundacion') is-invalid @enderror" 
                               name="fecha_fundacion" id="fecha_fundacion" 
                               value="{{ isset($equipo) ? $equipo->fecha_fundacion : old('fecha_fundacion') }}" 
                               placeholder="Fecha de fundacion del equipo" required>
                        <label for="correo">Fecha de Fundacion</label>
                    </div>
                </div>

                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('equipo.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> {{ isset($equipo) ? 'Actualizar' : 'Agregar' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection