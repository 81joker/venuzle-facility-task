<?php

namespace App\Livewire;

use App\Models\Venue;
use Livewire\Component;

class IndexVenues extends Component
{


    public function render()
    {
        
        return view('livewire.venues.index-venues',['venues'=> Venue::paginate(10)])->layout('layouts.app');;
    }
}
