@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? "{{ __('Show') Inventario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizando') }} Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> {{ __('Volver atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idcomputadora:</strong>
                            {{ $inventario->idcomputadora }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventario->Cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Adquisicion:</strong>
                            {{ $inventario->Fecha_Adquisicion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
