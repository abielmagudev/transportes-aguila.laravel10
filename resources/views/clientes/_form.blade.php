<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" autofocus required>
    <x-error name="nombre" />
</div>
<div class="mb-3">
    <label for="inputRfc" class="form-label">RFC</label>
    <input type="text" class="form-control" id="inputRfc" name="rfc" value="{{ old('rfc', $cliente->rfc) }}" required>
    <x-error name="rfc" />
</div>
<div class="mb-3">
    <label for="inputDireccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="inputDireccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" required>
    <x-error name="direccion" />
</div>
<div class="mb-3">
    <label for="inputNumeroExterior" class="form-label">Número exterior</label>
    <input type="number" class="form-control" id="inputNumeroExterior" name="numero_exterior" value="{{ old('numero_exterior', $cliente->numero_exterior) }}" step="1" min="1" placeholder="Opcional">
    <x-error name="numero_exterior" />
</div>
<div class="mb-3">
    <label for="inputNumeroInterior" class="form-label">Número interior</label>
    <input type="number" class="form-control" id="inputNumeroInterior" name="numero_interior" value="{{ old('numero_interior', $cliente->numero_interior) }}" step="1" min="1" placeholder="Opcional">
    <x-error name="numero_interior" />
</div>
<div class="mb-3">
    <label for="inputColonia" class="form-label">Colonia</label>
    <input type="text" class="form-control" id="inputColonia" name="colonia" value="{{ old('colonia', $cliente->colonia) }}" placeholder="Opcional">
    <x-error name="colonia" />
</div>
<div class="mb-3">
    <label for="inputCodigoPostal" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="inputCodigoPostal" name="codigo_postal" value="{{ old('codigo_postal', $cliente->codigo_postal) }}" required>
    <x-error name="codigo_postal" />
</div>
<div class="mb-3">
    <label for="selectPais" class="form-label">País</label>
    <select class="form-select" id="selectPais" name="pais" required>
        <option disabled selected label="Selecciona el país..."></option>
        @foreach($paises_predeterminados as $clave_pais => $titulo_pais)
        <option value="{{ $clave_pais }}" {{ $clave_pais == old('pais', $cliente->pais) ? 'selected' : '' }}>{{ $titulo_pais }}</option>
        @endforeach
    </select>
    <x-error name="pais" />
</div>
<div class="mb-3">
    <label for="inputEstado" class="form-label">Estado</label>
    <input type="text" class="form-control" id="inputEstado" name="estado" value="{{ old('estado', $cliente->estado) }}" required>
    <x-error name="estado" />
</div>
<div class="mb-3">
    <label for="inputCiudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCiudad" name="ciudad" value="{{ old('ciudad', $cliente->ciudad) }}" required>
    <x-error name="ciudad" />
</div>
<div class="mb-3">
    <label for="inputCuentaBancaria" class="form-label">Cuenta bancaria</label>
    <input type="text" class="form-control" id="inputCuentaBancaria" name="cuenta_bancaria" value="{{ old('cuenta_bancaria', $cliente->cuenta_bancaria) }}" placeholder="Opcional">
    <x-error name="cuenta_bancaria" />
</div>
<div class="mb-3">
    <label for="selectMoneda" class="form-label">Moneda</label>
    <select class="form-select" id="selectMoneda" name="moneda" required>
        <option disabled selected label="Selecciona la moneda..."></option>
        @foreach($tipos_moneda as $moneda)
        <option value="{{ $moneda }}" {{ $moneda == old('moneda', $cliente->moneda) ? 'selected' : '' }}>{{ ucfirst($moneda) }}</option>
        @endforeach
    </select>
    <x-error name="moneda" />
</div>
<div class="mb-3">
    <label for="inputRegimenFiscal" class="form-label">Régimen fiscal</label>
    <input type="text" class="form-control" id="inputRegimenFiscal" name="regimen_fiscal" value="{{ old('regimen_fiscal', $cliente->regimen_fiscal) }}" required>
    <x-error name="regimen_fiscal" />
</div>
<div class="mb-3">
    <label for="checkboxRetencion" class="form-label">Retención</label>
    <div class="form-control">
        <div class="form-check">
            <input class="form-check-input" id="checkboxRetencion" type="checkbox" name="retencion" value="1" {{ old('retencion', $cliente->retencion) ? 'checked' : '' }}>
            <label class="form-check-label" for="checkboxRetencion">Si, retencion del 4%</label>
        </div>
    </div>
    <x-error name="retencion" />
</div>
<div class="mb-3">
    <label for="selectTipoPago" class="form-label">Tipo de pago</label>
    <select class="form-select" id="selectTipoPago" name="tipo_pago" required>
        <option disabled selected label="Selecciona el tipo de pago..."></option>
        @foreach($tipos_pago as $tipo_pago)
        <option value="{{ $tipo_pago }}" {{ $tipo_pago == old('tipo_pago', $cliente->tipo_pago) ? 'selected' : '' }}>{{ ucfirst($tipo_pago) }}</option>
        @endforeach
    </select>
    <x-error name="tipo_pago" />
</div>
<div class="mb-3">
    <label for="inputTasaIva" class="form-label">Tasa(IVA)</label>
    <input type="number" class="form-control" id="inputTasaIva" name="tasa_iva" value="{{ old('tasa_iva', $cliente->tasa_iva) }}" step="0.01" min="0.01" required>
    <x-error name="tasa_iva" />
</div>
<div class="mb-3">
    <label for="inputCuentaContable" class="form-label">Cuenta contable</label>
    <input type="text" class="form-control" id="inputCuentaContable" name="cuenta_contable" value="{{ old('cuenta_contable', $cliente->cuenta_contable) }}" required>
    <x-error name="cuenta_contable" />
</div>
@csrf
