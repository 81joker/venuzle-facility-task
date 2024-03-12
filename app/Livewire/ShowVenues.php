<?php

namespace App\Livewire;

use App\Models\Venue;
use Livewire\Component;

class ShowVenues extends Component
{
    public $venue;

    public function mount(Venue $venue)
    {
        $this->venue = $venue;
    }

    public function render()
    {
        return view('livewire.venues.show-venues')->layout('layouts.app');
    }
}
