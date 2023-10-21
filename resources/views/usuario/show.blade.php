@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $usuario->Tipo_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $usuario->Numero_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usuario->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usuario->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->Contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Id Rol:</strong>
                            {{ $usuario->id_rol }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
