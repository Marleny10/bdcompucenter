<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idcliente') }}
            {{ Form::text('idcliente', $proveedor->idcliente, ['class' => 'form-control' . ($errors->has('idcliente') ? ' is-invalid' : ''), 'placeholder' => 'Idcliente']) }}
            {!! $errors->first('idcliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Compañia') }}
            {{ Form::text('Nombre_Compañia', $proveedor->Nombre_Compañia, ['class' => 'form-control' . ($errors->has('Nombre_Compañia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Compañia']) }}
            {!! $errors->first('Nombre_Compañia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_Documento') }}
            {{ Form::text('Tipo_Documento', $proveedor->Tipo_Documento, ['class' => 'form-control' . ($errors->has('Tipo_Documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('Tipo_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_Documento') }}
            {{ Form::text('Numero_Documento', $proveedor->Numero_Documento, ['class' => 'form-control' . ($errors->has('Numero_Documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('Numero_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion_Compañia') }}
            {{ Form::text('Direccion_Compañia', $proveedor->Direccion_Compañia, ['class' => 'form-control' . ($errors->has('Direccion_Compañia') ? ' is-invalid' : ''), 'placeholder' => 'Direccion Compañia']) }}
            {!! $errors->first('Direccion_Compañia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $proveedor->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $proveedor->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>