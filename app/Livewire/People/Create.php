<?php

namespace App\Livewire\People;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Create extends Component
{
    use WithFileUploads;
    
    public $image;
    public $name;

    public function render()
    {
        return view('livewire.people.create');
    }

    public function save()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
 
        $image_path = $this->image->store('images');
        $filename = File::name($image_path);
        $extension = File::extension($image_path);
        $storagePath = storage_path('app/' . $image_path);
        $publicPath = public_path("images/people/$filename.$extension");
        File::move($storagePath, $publicPath);
        
        Person::create([
            'name' => $this->name,
            'image' => "$filename.$extension"
        ]);

        session()->flash('flash.banner', 'Action completed successfully!');
        session()->flash('flash.bannerStyle', 'success');
    }
}
