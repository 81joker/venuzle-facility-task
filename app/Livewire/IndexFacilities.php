<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;
use App\Models\Facility;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class IndexFacilities extends Component
{
    use WithPagination;


    public ?int $quantity = 2;

    public ?string $search = null;

    public function render()
    {
        $data =
            [
                'headers' => [
                    ['index' => 'id', 'label' => '#'],
                    ['index' => 'name', 'label' => 'Member'],
                ],
            'rows' => User::query()
            ->paginate(2)
            ->withQueryString()
            ];
        return view('livewire.index-facilities', $data);
    }
};
