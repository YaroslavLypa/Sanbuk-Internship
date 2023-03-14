<?php

namespace App\Http\Livewire\Experience;

use LivewireUI\Modal\ModalComponent;

class DateFilter extends ModalComponent
{
    public $startDate;
    public $endDate;

    public function mount(string $startDate = null, string $endDate = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function render()
    {
        return view('livewire.experience.date-filter');
    }
}
