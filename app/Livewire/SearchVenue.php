<?php

namespace App\Livewire;

use App\Models\Venue;
use Livewire\Component;
use Livewire\Attributes\Url;

class SearchVenue extends Component
{
    #[Url]
    public $search = '';

    public function render()
    {
        $results = [];
        if (strlen($this->search) > 0) {
            $results = Venue::where('name', 'like', '%' . $this->search . '%')->paginate(3);
        }
        return view('livewire.venues.search-venue', compact('results'));
    }

  
}
