{{-- filepath: c:\xampp\htdocs\adminsena\resources\views\frm_estudiantes.blade.php --}}
@extends('layouts.app') {{-- Asegúrate de tener una plantilla base extendida --}}

@section('content')
<div class="container">
    <h1>Registrar Aprendiz</h1>
    <form action="{{ route('apprentices.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cell_number">Teléfono:</label>
            <input type="text" name="cell_number" id="cell_number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection