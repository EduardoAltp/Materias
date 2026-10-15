<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">

    <h1 class="mb-4">Editar materia</h1>

    <form action="/materias/{{ $materia->id }}" method="POST" class="card shadow-sm p-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre"
                class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $materia->nombre) }}">
            @error('nombre') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="creditos" class="form-label">Créditos</label>
            <input type="number" id="creditos" name="creditos"
                class="form-control @error('creditos') is-invalid @enderror"
                value="{{ old('creditos', $materia->creditos) }}">
            @error('creditos') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="profesor" class="form-label">Profesor</label>
            <input type="text" id="profesor" name="profesor"
                class="form-control @error('profesor') is-invalid @enderror"
                value="{{ old('profesor', $materia->profesor) }}">
            @error('profesor') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="/materias/{{ $materia->id }}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
    </form>

</div>
</body>
</html>