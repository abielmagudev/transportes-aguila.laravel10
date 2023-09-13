<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{ old('nombre', $propietario->nombre) }}" autofocus required>
    <x-error name='nombre'></x-error>
</div>
<div class="mb-3">
    <label class="form-label">Tipos de remolque</label>
    <div class="form-control p-0">
        <div class="table-responsive rounded-1">
            <table class="table table-hover m-0">
                <tbody>
                    @foreach($tipos_remolque as $tipo_remolque)
                    <?php $checkbox_id = 'tipoRemolque' . $tipo_remolque->id ?>
                    <tr>
                        <td class="{{ $loop->last ? 'border-0' : '' }}" style="width:1%">
                            <input type="checkbox" class="form-check-input" id="{{ $checkbox_id }}" name='tipos_remolque[]' value="{{ $tipo_remolque->id }}" @checked( in_array($tipo_remolque->id, old('tipos_remolque', $propietario->tipos_remolque_array)) )>
                        </td>
                        <td class="{{ $loop->last ? 'border-0' : '' }}">
                            <label for="{{ $checkbox_id }}" class='form-check-labe'>{{ $tipo_remolque->nombre }}</label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-error name='tipos_remolque'></x-error>
    <x-error name='tipos_remolque.*'></x-error>
</div>
@csrf
