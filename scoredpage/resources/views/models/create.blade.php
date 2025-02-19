<!-- filepath: /c:/Users/dfdav/Desktop/Prueba/scoredpage/resources/views/models/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Modelo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Registrar Modelo</h1>
        <form action="{{ route('models.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="profesion">Profesión</label>
                <input type="text" class="form-control" id="profesion" name="profesion" required>
            </div>
            <div class="form-group">
                <label for="experiencia">Experiencia</label>
                <input type="text" class="form-control" id="experiencia" name="experiencia" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="rh">RH</label>
                <input type="text" class="form-control" id="rh" name="rh" required>
            </div>
            <div class="form-group">
                <label for="colorPiel">Color de Piel</label>
                <input type="text" class="form-control" id="colorPiel" name="colorPiel" required>
            </div>
            <div class="form-group">
                <label for="disponibilidad">Disponibilidad</label>
                <input type="text" class="form-control" id="disponibilidad" name="disponibilidad" required>
            </div>
            <div class="form-group">
                <label for="tarifaHora">Tarifa por Hora</label>
                <input type="number" class="form-control" id="tarifaHora" name="tarifaHora" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>