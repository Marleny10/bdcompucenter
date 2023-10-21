@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? "{{ __('Show') Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $venta->idusuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $venta->idcliente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Comprobante:</strong>
                            {{ $venta->tipo_comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Comprobante:</strong>
                            {{ $venta->numero_comprobante }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $venta->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $venta->Total }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $venta->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
