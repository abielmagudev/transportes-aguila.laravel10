<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $origenDestino->nombre) }}" autofocus required>
    <x-error name="nombre" />
</div>
<div class="mb-3">
    <label for="inputRfc" class="form-label">RFC</label>
    <input type="text" class="form-control" id="inputRfc" name="rfc" value="{{ old('rfc', $origenDestino->rfc) }}" required>
    <x-error name="rfc" />
</div>
<div class="mb-3">
    <label for="inputDireccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="inputDireccion" name="direccion" value="{{ old('direccion', $origenDestino->direccion) }}" required>
    <x-error name="direccion" />
</div>
<div class="mb-3">
    <label for="inputCalle" class="form-label">Calle</label>
    <input type="text" class="form-control" id="inputCalle" name="calle" value="{{ old('calle', $origenDestino->calle) }}" required>
    <x-error name="calle" />
</div>
<div class="mb-3">
    <label for="inputCodigoPostal" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="inputCodigoPostal" name="codigo_postal" value="{{ old('codigo_postal', $origenDestino->codigo_postal) }}" required>
    <x-error name="codigo_postal" />
</div>
<div class="mb-3">
    <label for="inputNumeroExterior" class="form-label">Número exterior</label>
    <input type="number" class="form-control" id="inputNumeroExterior" name="numero_exterior" value="{{ old('numero_exterior', $origenDestino->numero_exterior) }}" step="1" min="1" required>
    <x-error name="numero_exterior" />
</div>
<div class="mb-3">
    <label for="inputNumeroInterior" class="form-label">Número interior</label>
    <input type="number" class="form-control" id="inputNumeroInterior" name="numero_interior" value="{{ old('numero_interior', $origenDestino->numero_interior) }}" step="1" min="1" placeholder="Opcional">
    <x-error name="numero_interior" />
</div>
<div class="mb-3">
    <label for="selectPais" class="form-label">País</label>
    <select class="form-select" id="selectPais" name="pais" required>
        <option disabled selected label="Selecciona un país..."></option>
        @foreach($paises as $clave_pais => $nombre_pais)
        <option value="{{ $clave_pais }}" {{ $clave_pais == $origenDestino->pais ? 'selected' : '' }}>{{ $nombre_pais }}</option>
        @endforeach
      </select>
    <x-error name="pais" />
</div>
<div class="mb-3">
    <label for="inputEstado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputEstado" name="estado" value="{{ old('estado', $origenDestino->estado) }}" required>
    <x-error name="estado" />
</div>
<div class="mb-3">
    <label for="inputCiudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCiudad" name="ciudad" value="{{ old('ciudad', $origenDestino->ciudad) }}" required>
    <x-error name="ciudad" />
</div>
@csrf