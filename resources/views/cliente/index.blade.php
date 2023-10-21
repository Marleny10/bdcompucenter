@extends('layouts.app')

@section('template_title')
Cliente
@endsection

@section('content')
<style>
    /* Estilos generales */
    body {
        background-color: #b2c6eb;
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #3d3d3d;
        font-size: 50px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: white;
    }

    .card-title {
        font-size: 24px;
    }

    .btn-primary {
        background-color: #c6e428;
        border: none;
    }
    
    .new-btn {
        background-color: green;
        font-size: 20px;
    }

    .edit-btn {
        background-color: darkblue;
    }

    .show-btn {
        background-color: black;
    }

    .del-btn {
        background-color: red;
    }

    .btn-primary:hover {
        background-color: #fbf3e0;
    }

    /* Estilos para la tabla */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: #fbf3e0;
        border: 1px solid #c6e428;
        border-radius: 0.25rem;
    }

    .table th, .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #b1c200;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #00aeb5;
        background-color: black;
        color: #fbf3e0;
    }

    .table tbody tr:nth-child(even) {
        background-color: black;
    }

    .table tbody tr:hover {
        background-color: #53c4bb;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Cliente') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right new-btn" data-placement="left">
                                {{ __('Crear nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Tipo Cliente</th>
                                    <th>Tipo Documento</th>
                                    <th>N° Documento</th>
                                    <th>Email</th>
                                    <th>Telefono</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $cliente->Tipo_Cliente }}</td>
                                    <td>{{ $cliente->Tipo_Documento }}</td>
                                    <td>{{ $cliente->Nombre_Documento }}</td>
                                    <td>{{ $cliente->Email }}</td>
                                    <td>{{ $cliente->Telefono }}</td>

                                    <td>
                                        <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary show-btn " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                            <a class="btn btn-sm btn-success edit-btn" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm del-btn"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $clientes->links() !!}
        </div>
    </div>
</div>
@endsection