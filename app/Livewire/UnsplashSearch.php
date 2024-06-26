<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UnsplashService;
use Illuminate\Support\Facades\Http;

class UnsplashSearch extends Component
{
    public $image_url;
    public $alt_description;
    public $topic; 
    public $showAltDescription = false;

    public function mount()
    {
        $this->refreshPhoto();
    }

    public function refreshPhoto()
    {
        // Fetch random photo data from UnsplashService
        $photo = app(UnsplashService::class)->getRandomPhoto($this->topic);

        // Set image URL and alt description
        $this->image_url = $photo['image_url'];
        $this->alt_description = $photo['alt_description'];
    }

    public function render()
    {
        return view('livewire.unsplash-search');
    }

    public function toggleAltDescription()
    {
        $this->showAltDescription = !$this->showAltDescription;
    }
}
