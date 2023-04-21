@props(['name'])
@error($name)
    <p class="text-red-500 tex-xs mt-2">{{ $message }}</p>
@enderror
