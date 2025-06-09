<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class SearchCars extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-cars', [
            'cars' => Car::where('make', 'like', '%' . $this->search . '%')
                ->orWhere('model', 'like', '%' . $this->search . '%')
                ->get(),
        ]);
    }
}
