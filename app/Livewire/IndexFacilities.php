<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Facility;
use Livewire\WithPagination;

class IndexFacilities extends Component
{



    public function render()
    {
   
        return view('livewire.facilities.index-facilities', ['facilities' => Facility::paginate(10)])->layout('layouts.app');;

    }
};
