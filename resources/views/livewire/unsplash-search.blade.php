<div>
    <div class="flex flex-col space-y-4">
        <p class="text-center text-xl font-bold">Selecione um tópico</p>
        <div class="flex w-full sm:w-3/5 lg:w-4/5 sm:mx-auto justify-center space-x-2">
            <select wire:model="topic" class="block w-full p-2 border border-gray-300 rounded-xl hover:cursor-pointer">
                <option value="nature">Natureza</option>
                <option value="cars">Carros</option>
                <option value="animals">Animais</option>
            </select>
            <div>
                <x-button wire:click="refreshPhoto"><img class="h-6" src="/images/icons/refresh.svg" alt=""></x-button>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-6 h-full sm:h-[32rem]">
        <img src="{{ $image_url }}" alt="{{ $alt_description }}" class="rounded-xl">
    </div>
    <div class="flex flex-col items-center justify-center space-y-2 w-full sm:w-3/5 lg:w-4/5 sm:mx-auto">
        <div class="flex items-center justify-center gap-1">
            <x-checkbox type="checkbox" wire:click="toggleAltDescription" />
            <label>Descrição</label>
        </div>
        <div class="w-full text-center">
            @if($showAltDescription)
            <x-card>
                <p>{{ $alt_description }}</p>
            </x-card>
            @endif
        </div>
    </div>
</div>