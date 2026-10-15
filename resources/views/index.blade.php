<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Materias</h1>
        <a href="{{ route('materias.create') }}" class="btn btn-primary">+ Nueva materia</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <table class="table table-hover mb-0">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Créditos</th>
                    <th>Profesor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($materias as $materia)
                    <tr>
                        <td>{{ $materia->id }}</td>
                        <td>{{ $materia->nombre }}</td>
                        <td>{{ $materia->creditos }}</td>
                        <td>{{ $materia->profesor }}</td>
                        <td>
                            <a href="{{ route('materias.show', $materia) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                            <a href="{{ route('materias.edit', $materia) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">Aún no hay materias registradas.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $materias->links('pagination::bootstrap-5') }}
    </div>

</div>
</body>
</html>