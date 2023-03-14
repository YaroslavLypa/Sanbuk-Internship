<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use App\Models\Interfaces\StatusInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use Livewire\Component;

class ExperienceList extends Component
{
    public $experiences = [];
    public $search = null;
    public $filter = null;

    protected $queryString = ['search', 'filter'];

    protected $listeners = [
        'searchEvent' => 'searchListener',
        'filterEvent' => 'filterListener',
    ];

    public function updated($name, $value)
    {
        if ($name === 'search') {
            if (empty($value)) {
                $this->search = null;
            }

            $this->emit('searchEvent', $value);
        }
    }

    public function searchListener($value)
    {
        $this->search = $value;
        $this->initItems();
    }

    public function filterListener($type, $value)
    {
        $this->emit('closeModal');
        $this->filter[$type] = $value;
        $this->initItems();
    }

    public function mount()
    {
        $this->initItems();
    }

    public function render()
    {
        return view('livewire.experience-list');
    }

    public function initItems()
    {
        $experiences = Experience::query();

        if ($this->search !== null) {
            $experiences->where('name', 'like', '%' . $this->search . '%');
        }

        if ($this->filter !== null) {
            foreach ($this->filter as $key => $values) {
                if ($key === 'activity-period') {
                    $startDate = Carbon::parse($values['startDate']);
                    $endDate = Carbon::parse($values['endDate']);

                    $experiences
                        ->whereHas('packages', function (Builder $query) use ($startDate, $endDate) {
                            $query->where('status', StatusInterface::STATUS_ACTIVE)
                                ->whereDate('start_activity', '>=', $startDate)
                                ->whereDate('end_activity', '<=', $endDate);
                        });

                    continue;
                }

                $experiences->whereHas($key, function (Builder $query) use ($values) {
                    return $query->whereIn('id', $values);
                });
            }
        }

        $this->experiences = $experiences->get();

        return $this->experiences;
    }
}
