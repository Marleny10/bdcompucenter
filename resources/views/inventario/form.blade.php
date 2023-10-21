<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idcomputadora') }}
            {{ Form::text('idcomputadora', $inventario->idcomputadora, ['class' => 'form-control' . ($errors->has('idcomputadora') ? ' is-invalid' : ''), 'placeholder' => 'Idcomputadora']) }}
            {!! $errors->first('idcomputadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $inventario->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Adquisicion') }}
            {{ Form::text('Fecha_Adquisicion', $inventario->Fecha_Adquisicion, ['class' => 'form-control' . ($errors->has('Fecha_Adquisicion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Adquisicion']) }}
            {!! $errors->first('Fecha_Adquisicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>