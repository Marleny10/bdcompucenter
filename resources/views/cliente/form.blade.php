<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo_Cliente') }}
            {{ Form::text('Tipo_Cliente', $cliente->Tipo_Cliente, ['class' => 'form-control' . ($errors->has('Tipo_Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Administracion-Comprador-Vendedor']) }}
            {!! $errors->first('Tipo_Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_Documento') }}
            {{ Form::text('Tipo_Documento', $cliente->Tipo_Documento, ['class' => 'form-control' . ($errors->has('Tipo_Documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('Tipo_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N°_Documento') }}
            {{ Form::text('Nombre_Documento', $cliente->Nombre_Documento, ['class' => 'form-control' . ($errors->has('Nombre_Documento') ? ' is-invalid' : ''), 'placeholder' => 'N° Documento']) }}
            {!! $errors->first('Nombre_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $cliente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $cliente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>