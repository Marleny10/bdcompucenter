@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Cliente:</strong>
                            {{ $cliente->Tipo_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Documento:</strong>
                            {{ $cliente->Tipo_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>N° Documento:</strong>
                            {{ $cliente->Nombre_Documento }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->Telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
