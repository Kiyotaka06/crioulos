<?php

namespace App\Livewire\History;

use Livewire\Component;

class Figure extends Component
{
    public $sub_page = 'history.concept';

    public function render()
    {
        return view('livewire.history.figure');
    }

    public function showSubPage($sub_page)
    {
        $this->sub_page = 'history.' . $sub_page;
    }

    public function goBack()
    {
        $this->sub_page = null;
    }
}