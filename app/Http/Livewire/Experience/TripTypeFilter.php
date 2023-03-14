<?php

namespace App\Http\Livewire\Experience;

use App\Models\TripType;
use LivewireUI\Modal\ModalComponent;

class TripTypeFilter extends ModalComponent
{
    public $items = [];
    public $selected = [];

    public function mount()
    {
        $this->items = TripType::all();
        $filter = request()->query('filter');


        if ($filter !== null && in_array('tripType', $filter)) {
            $this->selected = $filter['tripType'];
        }
    }

    public function render()
    {
        return view('livewire.experience.trip-type-filter');
    }

    public function setSelected($value)
    {
        if (in_array($value, $this->selected) === false) {
            $this->selected[] = $value;
        }
    }
}
