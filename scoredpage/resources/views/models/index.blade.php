@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Lista de Modelos</h1>

    <!-- Botón para agregar un nuevo modelo -->
    <a href="{{ route('models.create') }}" class="btn btn-primary mb-3">Agregar Modelo</a>

    <!-- Tabla de modelos -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Profesión</th>
                <th>Tarifa por Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($models as $model)
            <tr>
                <td>{{ $model->id }}</td>
                <td>{{ $model->nombre ?? 'N/A' }}</td>
                <td>{{ $model->edad }}</td>
                <td>{{ $model->profesion }}</td>
                <td>${{ number_format($model->tarifaHora, 2) }}</td>
                <td>
                    <a href="{{ route('models.show', $model->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('models.edit', $model->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('models.destroy', $model->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este modelo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Mensajes de éxito -->
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
