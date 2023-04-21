<form action="/posts/{{ $post->slug }}/comments" method="POST">
    @auth
        <x-panel>
            @csrf
            <header class="flex items-center">
                <img src="http://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full" />
                <h2 class="ml-4">Want to participate? Go right ahead.</h2>
            </header>
            <x-form.field>
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, think of something to say." required></textarea>
                <x-error />
            </x-form.field>
            <div class="flex justify-end mt-6 pt-6 border-t bodrder-gray-200">
                <x-form.button>Post</x-form.button>
            </div>
        </x-panel>
    @else
        <p class="font-semibold">
            <a href="/register" class="hover:underline">Register</a> or
            <a href="/login" class="hover:underline">Sign in</a> to
            make a comment.
        </p>
    @endauth
</form>
