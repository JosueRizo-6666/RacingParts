@extends('layout/plantilla')
@section('tituloPajina', "Crear un nuevo registro")
@section('contenido')
<div class="container py-5">
    <div class="card shadow-sm">
 <div class="card-header text-white" style="background-color: red;">
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
               placeholder="Nombre de la empresa" required 
               pattern="^[A-Za-z0-9\s\.\-]+$" title="El nombre de la empresa solo puede contener letras, números, espacios, puntos y guiones.">
        <label for="nombre">Nombre de la empresa</label>
    </div>
</div>


                    <div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('num_rtn') is-invalid @enderror" 
               name="num_rtn" id="num_rtn" 
               value="{{ isset($datos) ? $datos->num_rtn : old('num_rtn') }}" 
               placeholder="Número de RTN" required 
               pattern="^\d{10}$" title="El número de RTN debe contener exactamente 10 dígitos.">
        <label for="num_rtn">Número de RTN</label>
    </div>
</div>


                    <div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('direccion') is-invalid @enderror" 
               name="direccion" id="direccion" 
               value="{{ isset($datos) ? $datos->direccion : old('direccion') }}" 
               placeholder="Dirección" required pattern=".{5,}" title="La dirección debe tener al menos 5 caracteres.">
        <label for="direccion">Dirección</label>
    </div>
</div>


                    <!-- telefono -->
                    <div class="col-md-6">
    <div class="form-floating mb-3">
        <input 
            type="tel" 
            class="form-control @error('telefono') is-invalid @enderror" 
            name="telefono" 
            id="telefono" 
            value="{{ isset($datos) ? $datos->telefono : old('telefono') }}" 
            placeholder="Número de teléfono" 
            required
            pattern="\+\d{1,3}[\s-]?\d{8}"
            title="El formato debe ser: +código país seguido de 8 dígitos (ej: +504 99887766)">
            
        <label for="telefono">Número de teléfono</label>

        @error('telefono')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

                    <!-- correo -->
                    <div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="email" class="form-control @error('correo') is-invalid @enderror" 
               name="correo" id="correo" 
               value="{{ isset($datos) ? $datos->correo : old('correo') }}" 
               placeholder="Correo electrónico" required>
        <label for="correo">Correo electrónico</label>
    </div>
</div>


                    <!-- representante -->
                    <div class="col-md-6">
    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('rep_ventas') is-invalid @enderror" 
               name="rep_ventas" id="rep_ventas" 
               value="{{ isset($datos) ? $datos->rep_ventas : old('rep_ventas') }}" 
               placeholder="Representante de ventas" required 
               pattern="^[A-Za-z\s\.\-]+$" title="El nombre del representante de ventas solo puede contener letras, espacios, puntos y guiones.">
        <label for="rep_ventas">Representante de ventas</label>
    </div>
</div>

                    
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Regresar
                    </a>
                    <button type="submit" class="btn btn-danger">
                    <i class="fas fa-save"></i> {{ isset($datos) ? 'Actualizar' : 'Guardar' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection