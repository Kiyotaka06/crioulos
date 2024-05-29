<x-card>
    <div class="flex flex-col space-y-2 items-center justify-center">
        <x-application-logo class="block h-12 w-auto" />
        <h1 class="text-2xl font-medium text-gray-900">
            Bem-vindo utilizador!
        </h1>
    </div>
    <p class="mt-6 text-gray-500 leading-relaxed">
        Agora podes disfrutar de mais funcionalidades, por fazeres parte da nossa comunidade, tais como, inserir palavras, ver as palavras adicionadas e utilizar a nossa ferramenta "Unsplash".
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
            Aqui podes inserir palavras que vão povoar a base de dados deste projeto para aumentar, consequentemente, o número de traduções possíveis.
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
            Aqui podes visualizar todas as palavras que já foram adicionadas anteriormente e as suas respetivas linguagens (desde: Portugês, Crioulo-Bissau-Guineense, Papiamento ...)
        </p>
    </div>
</div>