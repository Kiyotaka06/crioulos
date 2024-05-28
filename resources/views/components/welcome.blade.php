<x-card>
    <div class="flex flex-col space-y-2 items-center justify-center">
        <x-application-logo class="block h-12 w-auto" />
        <h1 class="text-2xl font-medium text-gray-900">
            Bem-vindo utilizador!
        </h1>
    </div>
    <p class="mt-6 text-gray-500 leading-relaxed">
        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
        ecosystem to be a breath of fresh air. We hope you love it.
    </p>
</x-card>

<div class="bg-gray-100 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <img class="h-8" src="/images/icons/writing.svg" alt="">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('lexicon.create') }}">Inserir Palavras</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <img class="h-8" src="/images/icons/book.svg" alt="">
            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('words.index') }}">Ver Palavras</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
        </p>
    </div>
</div>