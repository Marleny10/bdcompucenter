<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idusuario') }}
            {{ Form::text('idusuario', $venta->idusuario, ['class' => 'form-control' . ($errors->has('idusuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idusuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcliente') }}
            {{ Form::text('idcliente', $venta->idcliente, ['class' => 'form-control' . ($errors->has('idcliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idcliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_comprobante') }}
            {{ Form::text('tipo_comprobante', $venta->tipo_comprobante, ['class' => 'form-control' . ($errors->has('tipo_comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Comprobante']) }}
            {!! $errors->first('tipo_comprobante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_comprobante') }}
            {{ Form::text('numero_comprobante', $venta->numero_comprobante, ['class' => 'form-control' . ($errors->has('numero_comprobante') ? ' is-invalid' : ''), 'placeholder' => 'Numero Comprobante']) }}
            {!! $errors->first('numero_comprobante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $venta->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $venta->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $venta->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>