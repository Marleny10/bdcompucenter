<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Numero_Compra') }}
            {{ Form::text('Numero_Compra', $compra->Numero_Compra, ['class' => 'form-control' . ($errors->has('Numero_Compra') ? ' is-invalid' : ''), 'placeholder' => 'Numero Compra']) }}
            {!! $errors->first('Numero_Compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idusuario') }}
            {{ Form::text('idusuario', $compra->idusuario, ['class' => 'form-control' . ($errors->has('idusuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idusuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcliente') }}
            {{ Form::text('idcliente', $compra->idcliente, ['class' => 'form-control' . ($errors->has('idcliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idcliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idproveedor') }}
            {{ Form::text('idproveedor', $compra->idproveedor, ['class' => 'form-control' . ($errors->has('idproveedor') ? ' is-invalid' : ''), 'placeholder' => 'Idproveedor']) }}
            {!! $errors->first('idproveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcomputadora') }}
            {{ Form::text('idcomputadora', $compra->idcomputadora, ['class' => 'form-control' . ($errors->has('idcomputadora') ? ' is-invalid' : ''), 'placeholder' => 'Idcomputadora']) }}
            {!! $errors->first('idcomputadora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $compra->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::text('Cantidad', $compra->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Total') }}
            {{ Form::text('Total', $compra->Total, ['class' => 'form-control' . ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>