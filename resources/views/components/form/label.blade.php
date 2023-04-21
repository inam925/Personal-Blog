@props(['name', 'for'])
<label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="{{ $for ?? $name }}">
    {{ $name }}
</label>
