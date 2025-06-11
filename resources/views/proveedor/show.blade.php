@extends('layout/plantilla')

@section('tituloPajina', 'Datos del Proveedor')

@section('contenido')
<div class="container py-5">
    {{-- Título principal de la página --}}
    <h1 class="mb-4 text-center">Datos del Proveedor</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    {{-- Muestra el nombre del proveedor como título de la tarjeta --}}
                    <h5 class="card-title mb-0">{{ $proveedor->nombre }}</h5>
                </div>
                <div class="card-body">
                    {{-- Muestra los detalles del proveedor de forma organizada --}}
                    <p class="card-text">
                        <strong>Nombre de la empresa:</strong> {{ $proveedor->nombre }}<br>
                        <strong>Número de RTN:</strong> {{ $proveedor->num_rtn }}<br>
                        <strong>Dirección:</strong> {{ $proveedor->direccion }}<br>
                        <strong>Teléfono:</strong> {{ $proveedor->telefono }}<br>
                        <strong>Correo Electrónico:</strong> {{ $proveedor->correo }}<br>
                        <strong>Representante:</strong> {{ $proveedor->Representante }}               
                     </p>

                    <hr>

                    {{-- Botones de acción --}}
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('proveedor.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver al listado
                        </a>
                        {{-- Botón para abrir el modal de eliminación --}}
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{ $proveedor->id }}">
                            <i class="fas fa-trash"></i> Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmación para Eliminar -->
    <div class="modal fade" id="modalEliminar{{ $proveedor->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $proveedor->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel{{ $proveedor->id }}">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar al proveedor?: <strong>{{ $proveedor->nombre }}</strong>?
                </div>
                <div class="modal-footer">
                    {{-- Formulario para ejecutar la acción de eliminar --}}
                    <form method="POST" action="{{ route('proveedor.destroy', $proveedor->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Sí, Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
