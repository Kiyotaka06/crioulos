<div class="text-white">
    <form wire:submit.prevent="save">
        <input type="file" wire:model="image">

        <input class="text-black" type="text" wire:model="name">

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save image</button>
    </form>
</div>