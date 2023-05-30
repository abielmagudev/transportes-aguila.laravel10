<div class="mb-3">
    <label for="inputNumeroRemolque" class="form-label">Número de remolque</label>
    <input type="text" class="form-control" id="inputNumeroRemolque" name="numero_remolque" value="{{ old('numero_remolque', $movimiento->numero_remolque) }}" autofocus>
    @error('numero_remolque')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="inputPlacasRemolque" class="form-label">Placas del remolque</label>
    <input type="text" class="form-control" id="inputPlacasRemolque" name="placas_remolque" value="{{ old('placas_remolque', $movimiento->placas_remolque) }}">
    @error('placas_remolque')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="inputPropietarioRemolque" class="form-label">Propietario del remolque</label>
    <input type="text" class="form-control" id="inputPropietarioRemolque" name="propietario_remolque" value="{{ old('propietario_remolque', $movimiento->propietario_remolque) }}">
    @error('propietario_remolque')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="selectTipoRemolque" class="form-label">Tipo de remolque</label>
    <select class="form-select" id='selectTipoRemolque' name='tipo_remolque'>
        <option disabled selected label='Selecciona...'></option>
        @foreach($tiposRemolque as $tipoRemolque)
        <option value="{{ $tipoRemolque->id }}" @selected( old('tipo_remolque', ($movimiento->tipoRemolque->id ?? 0)) == $tipoRemolque->id )>{{ $tipoRemolque->nombre }}</option>
        @endforeach
    </select>
    @error('id_tipo_remolque')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="selectLineaAmericana" class="form-label">Línea americana</label>
    <select class="form-select" id='selectLineaAmericana' name='linea_americana'>
        <option disabled selected label='Selecciona...'></option>
        @foreach($lineasAmericanas as $lineaAmericana)
        <option value="{{ $lineaAmericana->id }}" @selected( old('linea_americana', ($movimiento->lineaAmericana->id ?? null)) == $lineaAmericana->id )>{{ $lineaAmericana->nombre }}</option>
        @endforeach
    </select>
    @error('id_linea_americana')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="selectCercaDecaGpsOrigen" class="form-label">Origen</label>
    <select class="form-select" id='selectCercaDecaGpsOrigen' name='cerca_decagps_origen'>
        <option disabled selected label='Selecciona una cerca GPS...'></option>
        @foreach($cercasDecaGps as $cercaDecaGps)
        <option value="{{ $cercaDecaGps->id }}" @selected( old('cerca_decagps_origen') == $cercaDecaGps->id )>{{ $cercaDecaGps->nombre }}</option>
        @endforeach
    </select>
    @error('id_cerca_decagps_origen')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="selectCercaDecaGpsDestino" class="form-label">Destino</label>
    <select class="form-select" id='selectCercaDecaGpsDestino' name='cerca_decagps_destino'>
        <option disabled selected label='Selecciona una cerca GPS...'></option>
        @foreach($cercasDecaGps as $cercaDecaGps)
        <option value="{{ $cercaDecaGps->id }}" @selected( old('cerca_decagps_destino') == $cercaDecaGps->id )>{{ $cercaDecaGps->nombre }}</option>
        @endforeach
    </select>
    @error('id_cerca_decagps_destino')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="row">
    <div class="col-sm">
        <div class="mb-3">
            <label for="inputFecha" class="form-label">Fecha</label>
            <?php $fecha_cache = $movimiento->fecha ?? date('Y-m-d') ?>
            <input type="date" class="form-control" id="inputFecha" name="fecha" value="{{ old('fecha', $fecha_cache) }}">
            @error('fecha')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-sm">
        <div class="mb-3">
            <label for="inputHora" class="form-label">Hora</label>
            <?php $hora_cache = $movimiento->hora ?? date('H:i') ?>
            <input type="time" class="form-control" id="inputHora" name="hora" value="{{ old('hora', $hora_cache) }}">
            @error('hora')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
<div class="mb-3">
    <label for="textareaObservaciones" class="form-label">Observaciones</label>
    <textarea class="form-control" id="textareaObservaciones" rows="3" name="observaciones">{{ old('observaciones', $movimiento->observaciones) }}</textarea>
    @error('observaciones')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="inputDiasPatio" class="form-label">Cantidad de dias en patio</label>
    <?php $cantidad_dias_patio_cache = $movimiento->cantidad_dias_patio ?? 0 ?>
    <input type="number" step="1" min="0" class="form-control" id="inputDiasPatio" name="cantidad_dias_patio" value="{{ old('cantidad_dias_patio', $cantidad_dias_patio_cache) }}">
    @error('cantidad_dias_patio')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cerrado_extranjero" value="1" id="checkboxCerradoExtranjero" @checked( old('cerrado_extranjero', $movimiento->cerrado_extranjero) )>
        <label class="form-check-label" for="checkboxCerradoExtranjero">Es cerrado en el extranjero</label>
    </div>
</div>
<div class="mb-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="cruce_directo" value="1" id="checkboxCruceDirecto" @checked( old('cruce_directo', $movimiento->cruce_directo) )>
        <label class="form-check-label" for="checkboxCruceDirecto">Es cruce directo</label>
    </div>
</div>
@csrf