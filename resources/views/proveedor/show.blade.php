@extends('layouts.app')

@section('template_title')
    {{ $proveedor->name ?? "{{ __('Show') Proveedor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Proveedor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedors.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $proveedor->idcliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Compañia:</strong>
                            {{ $proveedor->Nombre_Compañia }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $proveedor->Tipo_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $proveedor->Numero_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion Compañia:</strong>
                            {{ $proveedor->Direccion_Compañia }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $proveedor->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $proveedor->Email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
