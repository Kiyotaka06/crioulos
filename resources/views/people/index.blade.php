<x-guestLayout>
    <x-container>
        <x-grid>
            @foreach ($people as $person)
            <x-card>
                <div>
                    <a class="space-y-2" target="_blank" href="{{ $person->homepage }}">
                        <img class="m-auto rounded-full h-36 w-36 object-cover" src="/images/people/{{ $person->image }}">
                        <div class="flex justify-center gap-2">
                            <p class="text-xl font-semibold origin-center text-center">{{ $person->name }}</p>
                            <p class="p-0.5 border hover:shadow-lg">+</p>
                        </div>
                    </a>
                    <div class="flex justify-center gap-2">
                        @if($person->linkedin)
                        <a target="_blank" href="https://www.linkedin.com/in/{{ $person->linkedin }}"><img src="/images/icons/linkedin.svg" class="h-6 inline-block"></a>
                        @endif
                        @if($person->facebook)
                        <a target="_blank" href="https://www.facebook.com/{{ $person->facebook }}"><img src="/images/icons/facebook.svg" class="h-6 inline-block"></a>
                        @endif
                        @if($person->instagram)
                        <a target="_blank" href="https://www.instagram.com/{{ $person->instagram }}"><img src="/images/icons/instagram.svg" class="h-6 inline-block"></a>
                        @endif
                    </div>
                </div>
            </x-card>
            @endforeach
        </x-grid>
    </x-container>
</x-guestLayout>