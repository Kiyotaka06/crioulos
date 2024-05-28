<div class="space-y-4">
    <div class="space-y-2 text-center">
        <h1 class="pb-4 font-bold text-4xl sm:text-5xl">Figuras notáveis para o crescimento do crioulo guineense</h1>
        <p class="text-lg">A <span class="font-bold">identidade</span> da <span class="font-bold">língua crioula guineense</span> é moldada por uma <span class="font-bold">variedade de influências</span>, tanto <span class="font-bold">históricas</span> quanto <span class="font-bold">temporâneas</span>.</p>
    </div>
    <x-card>
        <div class="space-y-6">
            <div class="flex flex-col md:flex-row justify-start items-center gap-2 md:gap-4">
                <div class="w-full justify-start h-full space-y-2 order-1">
                    <h2 class="font-bold text-4xl">Amílcar Cabral</h2>
                    <p><span class="font-bold">Amílcar Cabral</span> foi uma <span class="font-bold">figura-chave</span> na <span class="font-bold">luta</span> pela <span class="font-bold">independência</span> da <span class="font-bold">Guiné-Bissau</span> e <span class="font-bold">Cabo-Verde</span>. Ele desempenhou um papel relevante na <span class="font-bold">promoção</span> do <span class="font-bold">crioulo guineense</span> como uma <span class="font-bold">língua nacional</span> e <span class="font-bold">símbolo de identidade cultural</span>.</p>
                </div>
                <div class="order-2 md:w-5/12 lg:w-4/12 justify-center">
                    <img class="rounded-lg drop-shadow" src="/images/figures/amilcar-cabral.jpg" alt="">
                </div>
            </div>
            @if($sub_page === 'history.amilcar')
            @livewire('history.amilcar')
            <x-button wire:click="goBack">Ocultar</x-button>
            @else
            <x-button wire:click="showSubPage('amilcar')">Mostrar mais</x-button>
            @endif
        </div>
    </x-card>
    <x-card>
        <div class="space-y-6">
            <div class="flex flex-col md:flex-row justify-start items-center gap-2 md:gap-4">
                <div class="space-y-2">
                    <a class="font-bold text-4xl">Luís Romano</a>
                    <p>Conhecido como um dos <span class="font-bold">pioneiros</span> na <span class="font-bold">pesquisa</span> e <span class="font-bold">desenvolvimento</span> da <span class="font-bold">língua crioula guineense</span>, <span class="font-bold">Luís Romano</span> foi um <span class="font-bold">linguista</span> e <span class="font-bold">professor</span> que trabalhou para estabelecer o <span class="font-bold">crioulo</span> como uma <span class="font-bold">língua de instrução</span> e <span class="font-bold">cultura</span> na <span class="font-bold">Guiné-Bissau</span>.</p>
                </div>
                <div class="order-2 md:w-10/12 lg:w-7/12 justify-center">
                    <img class="rounded-lg drop-shadow" src="/images/figures/luis-romano.jpg" alt="">
                </div>
            </div>
            @if($sub_page === 'history.luis')
            @livewire('history.luis')
            <x-button wire:click="goBack">Ocultar</x-button>
            @else
            <x-button wire:click="showSubPage('luis')">Mostrar mais</x-button>
            @endif
        </div>
    </x-card>
</div>