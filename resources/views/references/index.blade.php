<x-guestLayout>
    <x-container>
        <x-grid>
            @foreach ($references as $reference)
            <a href="{{ $reference->url}}">
                <x-card>
                    <div class="space-y-4">
                        <img src="/images/books/{{ $reference->image }}" class="w-full h-64 object-contain" alt="{{ $reference->title }}">
                        <div class="space-y-2">
                            <p class="text-xl font-bold">{{ $reference->title }}</p>
                            <p class="font-bold">{{ $reference->subtitle }}</p>
                            <p>{{ $reference->author }}</p>
                        </div>
                    </div>
                </x-card>
            </a>
            @endforeach
        </x-grid>
    </x-container>
</x-guestLayout>