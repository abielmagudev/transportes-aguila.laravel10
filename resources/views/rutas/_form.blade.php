<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $ruta->nombre) }}">
    <x-error name="nombre" />
</div>
<div class="mb-3">
    <label for="inputKilometros" class="form-label">Kilometros</label>
    <input type="number" class="form-control" id="inputKilometros" name="kilometros" value="{{ old('kilometros', $ruta->kilometros) }}" min="1" step="1">
    <x-error name="kilometros" />
</div>
@csrf
