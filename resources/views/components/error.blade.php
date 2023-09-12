@if(! $errors->any() )
    {{ $slot ?? '' }}
    
@else
    @error($name)
    <div class="text-danger">
        <span class="fw-bold">*</span>
        <span>{{ $message }}</span>
    </div>
    @enderror

@endif
