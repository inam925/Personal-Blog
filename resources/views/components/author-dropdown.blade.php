<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold text-left w-full lg:w-32 flex lg:inline-flex">
            {{ isset($currentAuthor) ? ucwords($currentAuthor->name) : 'All Authors' }}
            <x-icon name="dropdown-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach ($authors as $author)
        <x-dropdown-item href="/?author={{ $author->username }}" :active='request()->is("authors/{$author->username}")'>
            {{ ucwords($author->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
