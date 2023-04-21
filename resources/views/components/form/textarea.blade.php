@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea class="w-full p-2 border border-gray-200 rounded" type="text" id="{{ $name }}"
        name="{{ $name }}" required>{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
