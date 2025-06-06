@extends('layout/plantilla')
@section('tituloPajina', "Crear un nuevo registro")
@section('contenido')
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ isset($datos) ? 'Editar tarea': 'Editar proveedor' }}</h4>
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
                @if(isset($datos))
                    @method('PUT')
                @endif

                <div class="row g-4">
                    <!-- Nombre y Descripción -->
                    
                    <div class="row g-4">
                    <!-- Nombre y Descripción -->
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                   name="nombre" id="nombre" 
                                   value="{{ isset($datos) ? $datos->nombre : old('nombre') }}" 
                                   placeholder="Nombre de la tarea" required>
                            <label for="nombre">Nombre de la empresa</label>
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('num_rtn') is-invalid @enderror" 
                                   name="num_rtn" id="num_rtn" 
                                   value="{{ isset($datos) ? $datos->num_rtn : old('num_rtn') }}" 
                                   placeholder="num_rtn" required>
                            <label for="num_rtn">Numero de RTN </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('Nombre_de_la_empresa') is-invalid @enderror" 
                                   name="Nombre_de_la_empresa" id="Nombre_de_la_empresa" 
                                   value="{{ isset($datos) ? $datos->Nombre_de_la_empresa : old('Nombre_de_la_empresa') }}" 
                                   placeholder="Nombre de la tarea" required>
                            <label for="Nombre_de_la_empresa">Direccion</label>
                        </div>
                    </div>

                    <!-- telefono -->
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('telefono') is-invalid @enderror" 
                                   name="telefono" id="telefono" 
                                   value="{{ isset($datos) ? $datos->Nombre_de_la_empresa : old('Nombre_de_la_empresa') }}" 
                                   placeholder="Nombre de la tarea" required>
                            <label for="Nombre_de_la_empresa">Numero de telefono</label>
                        </div>
                    </div>  

                    <!-- correo -->
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('telefono') is-invalid @enderror" 
                                   name="telefono" id="telefono" 
                                   value="{{ isset($datos) ? $datos->Nombre_de_la_empresa : old('Nombre_de_la_empresa') }}" 
                                   placeholder="Nombre de la tarea" required>
                            <label for="Nombre_de_la_empresa">Correo electronico</label>
                        </div>
                    </div>

                    <!-- representante -->
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('telefono') is-invalid @enderror" 
                                   name="telefono" id="telefono" 
                                   value="{{ isset($datos) ? $datos->Nombre_de_la_empresa : old('Nombre_de_la_empresa') }}" 
                                   placeholder="Nombre de la tarea" required>
                            <label for="Nombre_de_la_empresa">Representante de ventas</label>
                        </div>
                    </div>
                    
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> {{ isset($datos) ? 'Actualizar' : 'Guardar' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection