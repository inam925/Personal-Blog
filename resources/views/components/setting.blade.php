@props(['heading'])
<section class="max-w-4xl mx-auto py-8">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <ul>
                <h4 class="font-semibold mb-4">Links</h4>
                <li class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                    <a href="/admin/posts">All Posts</a>
                </li>
                <li class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">
                    <a href="/admin/posts/create">New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <x-panel class="w-full mx-auto">
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
