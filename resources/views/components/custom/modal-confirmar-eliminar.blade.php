<!-- Button trigger modal -->
<p class="text-end">
    <a href="#!" class='link-danger' data-bs-toggle="modal" data-bs-target="#confirmarEliminarModal">Eliminar {{ $attributes->get('name') }}</a>
</p>
  
<!-- Modal -->
<div class="modal fade" id="confirmarEliminarModal" tabindex="-1" aria-labelledby="confirmarEliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-4" id="confirmarEliminarModalLabel">Atención</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ $attributes->get('route') }}" method="post" id='formContinuarEliminar'>
                @method('delete')
                @csrf
                {!! $slot !!}
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-danger" form="formContinuarEliminar">Si, eliminar {{ $attributes->get('name') }}</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        </div>
        </div>
    </div>
</div>
