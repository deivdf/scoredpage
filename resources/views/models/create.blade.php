<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Modelo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Registrar Modelo</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('models.store') }}" method="POST" novalidate>
            @csrf

            <div class="form-group">
                <label for="birth_date">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
                @error('birth_date') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
                @error('age') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="profession">Profesión</label>
                <input type="text" class="form-control" id="profession" name="profession" value="{{ old('profession') }}">
            </div>

            <div class="form-group">
                <label for="experience">Experiencia</label>
                <input type="text" class="form-control" id="experience" name="experience" value="{{ old('experience') }}" required>
                @error('experience') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="blood_type">Tipo de Sangre</label>
                <input type="text" class="form-control" id="blood_type" name="blood_type" value="{{ old('blood_type') }}" required>
                @error('blood_type') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="skin_color">Color de Piel</label>
                <input type="text" class="form-control" id="skin_color" name="skin_color" value="{{ old('skin_color') }}" required>
                @error('skin_color') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="availability">Disponibilidad</label>
                <div>
                    <input type="hidden" name="availability" value="0">
                    <input type="checkbox" id="availability" name="availability" value="1" {{ old('availability') ? 'checked' : '' }}>
                    <label for="availability">Disponible</label>
                </div>
            </div>

            <div class="form-group">
                <label for="hourly_rate">Tarifa por Hora</label>
                <input type="number" class="form-control" id="hourly_rate" name="hourly_rate" step="0.01" value="{{ old('hourly_rate') }}" required>
                @error('hourly_rate') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</body>
</html>
