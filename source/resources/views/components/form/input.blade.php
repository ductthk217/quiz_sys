@props(['type' => 'text', 'name', 'value' => '', 'placeholder' => ''])

<div>
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        value="{{ old($name, $value) }}" 
        placeholder="{{ $placeholder }}" 
        class="form-control {{ $errors->has($name) ? 'border border-danger' : '' }}">

    {{-- Hiển thị lỗi sử dụng component có sẵn --}}
    <x-input-error :messages="$errors->get($name)" />
</div>