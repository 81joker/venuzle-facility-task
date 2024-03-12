<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Facility;

class ShowFacilities extends Component
{
    public $facility;

    public function mount(Facility $facility)
    {
        $this->facility = $facility;
    }

    public function render()
    {

        return view('livewire.facilities.show-facilities')->layout('layouts.app');
    }
}
