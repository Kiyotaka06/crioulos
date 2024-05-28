<!-- resources/views/livewire/history/figure.blade.php -->

<div class="space-y-4">
    <h1 class="pb-4 font-bold text-center text-4xl sm:text-5xl">Figuras notáveis para o crescimento do crioulo guineense</h1>
    <x-card>
        <div class="space-y-5">
            <p>A <span class="font-bold">identidade</span> da <span class="font-bold">língua crioula guineense</span> é moldada por uma <span class="font-bold">variedade de influências</span>, tanto <span class="font-bold">históricas</span> quanto <span class="font-bold">temporâneas</span>.</p>
            <div class="space-y-2">
                <a 
                    class="font-bold text-4xl"
                >Amílcar Cabral</a>
                <p class="pb-5"><span class="font-bold">Amílcar Cabral</span> foi uma <span class="font-bold">figura-chave</span> na <span class="font-bold">luta</span> pela <span class="font-bold">independência</span> da <span class="font-bold">Guiné-Bissau</span> e <span class="font-bold">Cabo-Verde</span>. Ele desempenhou um papel relevante na <span class="font-bold">promoção</span> do <span class="font-bold">crioulo guineense</span> como uma <span class="font-bold">língua nacional</span> e <span class="font-bold">símbolo de identidade cultural</span>.</p>

                <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded hover:cursor-pointer {{ $sub_page === 'history.amilcar' }}" wire:click="showSubPage('amilcar')">Mostrar mais</button>

                @if($sub_page === 'history.amilcar')
                    @livewire('history.amilcar')
                    <button class="mt-4 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" wire:click="goBack">Ocultar</button>
                @endif
            </div>
            <div class="space-y-2">
                <a 
                    class="font-bold text-4xl"
                >Luís Romano</a>
                <p class="pb-5">Conhecido como um dos <span class="font-bold">pioneiros</span> na <span class="font-bold">pesquisa</span> e <span class="font-bold">desenvolvimento</span> da <span class="font-bold">língua crioula guineense</span>, <span class="font-bold">Luís Romano</span> foi um <span class="font-bold">linguista</span> e <span class="font-bold">professor</span> que trabalhou para estabelecer o <span class="font-bold">crioulo</span> como uma <span class="font-bold">língua de instrução</span> e <span class="font-bold">cultura</span> na <span class="font-bold">Guiné-Bissau</span>.</p>
                
                <button class="bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded hover:cursor-pointer {{ $sub_page === 'history.luis' }}" wire:click="showSubPage('luis')">Mostrar mais</button>

                @if($sub_page === 'history.luis')
                    @livewire('history.luis')
                    <button class="mt-4 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" wire:click="goBack">Ocultar</button>
                @endif
            </div>
        </div>
    </x-card>
</div>
