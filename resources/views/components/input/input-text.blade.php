@props(['label', 'name', 'value', 'placeholder' => '','type'=> 'text', 'class', 'readonly', 'uppercase' => false , 'wraperattribute' => true])
<div
  @if ($wraperattribute)
    class="col-12 col-md-8 col-xl-8 mb-3"
  @endif
  <label for="defaultFormControlInput" class="form-label">{{ $label }}</label>
  <input
    {{ $attributes }}
    class="form-control @error($name)
      is-invalid
    @enderror mt-2"
    id="floatingInput"
    type={{ $type }}
    placeholder="{{ $placeholder }}"
    value="{{ old($name, $value ?? null) }}"
    id="example-text-input"
    name="{{ $name }}"
    {{ $readonly ?? '' }}
    style="{{ $uppercase ? 'text-transform: uppercase' : '' }}"
  />

  @error($name)
    <div id="floatingInputHelp" class="form-text text-danger">
      {{ $message }}
    </div>
  @enderror
</div>