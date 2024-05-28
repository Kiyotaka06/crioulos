<x-card>
    <div class="space-y-4">
        <div class="flex flex-col md:flex-row justify-center w-full lg:w-8/12 lg:mx-auto space-y-4 md:space-y-0 space-x-0 md:space-x-4">
            <div class="w-full text-center space-y-2">
                <h2>Palavra</h2>
                <div class="flex flex-col space-y-1">
                    <x-input class="text-center w-full rounded-md" type="text" wire:model="text" placeholder="Escreva uma palavra" />
                    @error('text')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="w-full text-center space-y-2">
                <h2>Linguagem</h2>
                <div class="flex flex-col justify-center space-y-1">
                    <select class="w-full rounded-md" name="lang_code_select" wire:model="language_code_id">
                        <option value="">Selecione a linguagem</option>
                        @foreach($languages as $language)
                        <option value="{{ $language->id }}">{{ $language->name }} - {{ $language->code }}</option>
                        @endforeach
                    </select>
                    @error('language_code_id')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center w-full lg:w-8/12 lg:mx-auto space-y-1">
            <x-button type="submit" wire:click.prevent="insert">Adicionar</x-button>
            <div class="text-center">
                @if (session()->has('message_error'))
                <p class="text-red-600">
                    {{ session('message_error') }}
                </p>
                @endif
                @if (session()->has('message'))
                <p class="text-green-600">
                    {{ session('message') }}
                </p>
                @endif
            </div>
        </div>
    </div>
</x-card>
<!-- Display Livewire validation errors -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif