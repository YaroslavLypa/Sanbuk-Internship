<?php

namespace App\Http\Livewire\Experience;

use App\Models\Type;
use LivewireUI\Modal\ModalComponent;

class BoatTypeFilter extends ModalComponent
{
    public $items = [];
    public $selected = [];

    public function mount()
    {
        $this->items = Type::all();
        $filter = request()->query('filter');

        if ($filter !== null && in_array('type', $filter)) {
            $this->selected = $filter['type'];
        }
    }


    public function render()
    {
        return view('livewire.experience.boat-type-filter');
    }

    public function setSelected($value)
    {
        if (in_array($value, $this->selected) === false) {
            $this->selected[] = $value;
        }
    }
}
