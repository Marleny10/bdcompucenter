@extends('layouts.app')

@section('template_title')
    {{ $rol->name ?? "{{ __('Show') Rol" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Rol</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rols.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Rol:</strong>
                            {{ $rol->Nombre_Rol }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $rol->Descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
