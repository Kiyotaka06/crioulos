<x-guestLayout>
    <x-container>
        <div class="max-w-6xl space-y-6 m-auto">
            <h1>Total de palavras: {{ $words->count() }}</h1>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach ($words as $word)
                <div class="shadow-sm bg-white text-center px-2 py-1 rounded-xl">
                    <p>{{ $word->text }}</p>
                    <p class="text-xs">{{ $word->languageCode->name }}</p>
                </div>
                @endforeach
            </div>
            {{ $words->links() }}
        </div>
    </x-container>
</x-guestLayout>