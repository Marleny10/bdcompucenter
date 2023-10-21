@extends('layouts.app')

@section('template_title')
    {{ $detalleVenta->name ?? "{{ __('Show') Detalle Venta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Detalle Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-ventas.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idventa:</strong>
                            {{ $detalleVenta->idventa }}
                        </div>
                        <div class="form-group">
                            <strong>Idcomputadora:</strong>
                            {{ $detalleVenta->idcomputadora }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $detalleVenta->idusuario }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalleVenta->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $detalleVenta->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $detalleVenta->Descuento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
