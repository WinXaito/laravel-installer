<div class="form-group">
    @isset($label)
        <label for="{{ $name }}" class="col-form-label">{{ $label }}</label>
    @endisset

    <div class="">
        <input type="text" class="form-control" placeholder="{{ $placeholder ?? null }}" name="{{ $name }}" id="{{ $name }}"
               value="{{ old($name, isset($value) ? $value : '') }}"{{ $required ?? false ? ' required' : null }}
               {{ $disabled ?? false ? ' disabled="disabled"' : "" }} autofocus/>
    </div>
</div>