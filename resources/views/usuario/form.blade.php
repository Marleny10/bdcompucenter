<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_Documento') }}
            {{ Form::text('Tipo_Documento', $usuario->Tipo_Documento, ['class' => 'form-control' . ($errors->has('Tipo_Documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
            {!! $errors->first('Tipo_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero_Documento') }}
            {{ Form::text('Numero_Documento', $usuario->Numero_Documento, ['class' => 'form-control' . ($errors->has('Numero_Documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('Numero_Documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $usuario->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $usuario->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $usuario->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('Contraseña', $usuario->Contraseña, ['class' => 'form-control' . ($errors->has('Contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('Contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_rol') }}
            {{ Form::text('id_rol', $usuario->id_rol, ['class' => 'form-control' . ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
    </div>
</div>