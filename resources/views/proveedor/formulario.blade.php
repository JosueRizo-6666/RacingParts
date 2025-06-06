@extends('layout/plantilla')
@section('tituloPajina', "Crear un nuevo registro")
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Nuevo Proveedor</div>

                    <div class="card-body">
                        {{-- Formulario para crear un nuevo proveedor --}}
                        <form method="POST" action="">
                            @csrf {{-- ¡IMPORTANTE! Protección CSRF para Laravel --}}

                            {{-- Nombre del Proveedor --}}
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
                                   placeholder="Nombre de la tarea" required>
                            <label for="num_rtn">Numero de RTN</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror" 
                                   name="direccion" id="direccion" 
                                   value="{{ isset($datos) ? $datos->direccion : old('direccion') }}" 
                                   placeholder="direccion" required>
                            <label for="direccion">Direccion</label>
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

                     <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('correo') is-invalid @enderror" 
                                   name="correo" id="correo" 
                                   value="{{ isset($datos) ? $datos->correo : old('correo') }}" 
                                   placeholder="correo" required>
                            <label for="correo">Correo electronico</label>
                        </div>
                    </div>

                    <!-- Descripción -->
                   <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('representante') is-invalid @enderror" 
                                   name="representante" id="representante" 
                                   value="{{ isset($datos) ? $datos->representante : old('representante') }}" 
                                   placeholder="representante" required>
                            <label for="representante">Representante de ventas</label>
                        </div>
                    </div>

                    
                </div>


                            <button type="submit" class="btn btn-dark">Crear Proveedor</button>
                            <button type="submit" class="btn"
                                style="background-color: red; color: white; border-color: red;">Regresar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection