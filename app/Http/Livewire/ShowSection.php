<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowSection extends Component
{
    public $section;
    public function render()
    {
        return view('livewire.show-section');
    }
}
