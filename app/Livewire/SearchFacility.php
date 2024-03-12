<?php

namespace App\Livewire;

use App\Models\Facility;
use Livewire\Component;

class SearchFacility extends Component
{
    #[\Livewire\Attributes\Url]
    public $search = '';

    public function render()
    {
        $results = [];
        if (strlen($this->search) > 0) {
            $results = Facility::where('name', 'like', '%' . $this->search . '%')->paginate(3);
        }
        return view('livewire.facilities.search-facility', compact('results'));
    }

}
