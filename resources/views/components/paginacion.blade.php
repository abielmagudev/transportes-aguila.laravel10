<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item {{ $collection->previousPageUrl() ?: 'disabled' }}">
        <a class="page-link" href="{{ $collection->previousPageUrl() ?? '#!' }}">Anterior</a>
      </li>
      <li class="page-item {{ $collection->nextPageUrl() ?: 'disabled' }}">
        <a class="page-link" href="{{ $collection->nextPageUrl() ?? 'disabled' }}">Siguiente</a>
      </li>
    </ul>
</nav>
