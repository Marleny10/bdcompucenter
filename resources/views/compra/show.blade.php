@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? "{{ __('Show') Compra" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Compra:</strong>
                            {{ $compra->Numero_Compra }}
                        </div>
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $compra->idusuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idcliente:</strong>
                            {{ $compra->idcliente }}
                        </div>
                        <div class="form-group">
                            <strong>Idproveedor:</strong>
                            {{ $compra->idproveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Idcomputadora:</strong>
                            {{ $compra->idcomputadora }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $compra->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $compra->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compra->Total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
