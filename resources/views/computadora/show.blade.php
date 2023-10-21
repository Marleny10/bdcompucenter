@extends('layouts.app')

@section('template_title')
    {{ $computadora->name ?? "{{ __('Show') Computadora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Computadora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('computadoras.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $computadora->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $computadora->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $computadora->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $computadora->Codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $computadora->Stock }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $computadora->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Idcategoria:</strong>
                            {{ $computadora->idcategoria }}
                        </div>
                        <div class="form-group">
                            <strong>Idproveedor:</strong>
                            {{ $computadora->idproveedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
