<div class="form-group">

    <label for="{{ $name }}" class="{{ $required ? 'required' : '' }}">
        {{ $label }}
    </label>

    <div class="custom-file">
        <input type="file" class="custom-file-input" name="{{ $name }}" id="{{ $name }}">
        <label class="custom-file-label border-dark" for="{{ $name }}">Choose file</label>
    </div>

    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
