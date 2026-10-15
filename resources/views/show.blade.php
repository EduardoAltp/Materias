<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">

    <h1 class="mb-4">Detalle de materia</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm p-4">
        <dl class="row mb-0">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $materia->id }}</dd>

            <dt class="col-sm-3">Nombre</dt>
            <dd class="col-sm-9">{{ $materia->nombre }}</dd>

            <dt class="col-sm-3">Créditos</dt>
            <dd class="col-sm-9">{{ $materia->creditos }}</dd>

            <dt class="col-sm-3">Profesor</dt>
            <dd class="col-sm-9">{{ $materia->profesor }}</dd>

            <dt class="col-sm-3">Creada el</dt>
            <dd class="col-sm-9">{{ $materia->created_at->format('d/m/Y H:i') }}</dd>

            <dt class="col-sm-3">Actualizada el</dt>
            <dd class="col-sm-9">{{ $materia->updated_at->format('d/m/Y H:i') }}</dd>
        </dl>
    </div>

    <div class="mt-4 d-flex gap-2">
        <a href="/materias" class="btn btn-outline-secondary">← Volver</a>
        <a href="/materias/{{ $materia->id }}/edit" class="btn btn-warning">Editar</a>

        <form action="/materias/{{ $materia->id }}" method="POST"
            onsubmit="return confirm('¿Seguro que deseas eliminar esta materia?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

</div>
</body>
</html>