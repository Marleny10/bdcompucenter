<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idventa') }}
            {{ Form::text('idventa', $detalleVenta->idventa, ['class' => 'form-control' . ($errors->has('idventa') ? ' is-invalid' : ''), 'placeholder' => 'Idventa']) }}
            {!! $errors->first('idventa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcomputadora') }}
            {{ Form::text('idcomputadora', $detalleVenta->idcomputadora, ['class' => 'form-control' . ($errors->has('idcomputadora') ? ' is-invalid' : ''), 'placeholder' => 'Idcomputadora']) }}
            {!! $errors->first('idcomputadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idusuario') }}
            {{ Form::text('idusuario', $detalleVenta->idusuario, ['class' => 'form-control' . ($errors->has('idusuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idusuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $detalleVenta->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('Precio', $detalleVenta->Precio, ['class' => 'form-control' . ($errors->has('Precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('Precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descuento') }}
            {{ Form::text('Descuento', $detalleVenta->Descuento, ['class' => 'form-control' . ($errors->has('Descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento']) }}
            {!! $errors->first('Descuento', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>