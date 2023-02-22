<?php

namespace App\Services;

use App\Models\Experience;
use App\Models\Interfaces\StatusInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class ExperienceService
{
    public function filter(array|null $filterParams)
    {
        $experiences = Experience::query();

        if ($filterParams !== null) {
            foreach ($filterParams as $key => $values) {
                if ($key === 'type') {
                    $experiences->with('type')
                        ->whereHas('type', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }

                if ($key === 'trip_type') {
                    $experiences->with('tripType')
                        ->whereHas('tripType', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }

                if ($key === 'vendor') {
                    $experiences->with('vendor')
                        ->whereHas('vendor', function (Builder $query) use ($values) {
                            $query->where('status', StatusInterface::STATUS_ACTIVE)
                                ->whereIn('id', $values);
                        });
                }

                if ($key === 'packages') {
                    $startDate = Carbon::parse($values['start_activity'])->startOfDay();
                    $endDate = Carbon::parse($values['end_activity'])->endOfDay();

                    $experiences->with('packages')
                        ->whereHas('packages', function (Builder $query) use ($startDate, $endDate) {
                            $query->where('status', StatusInterface::STATUS_ACTIVE)
                                ->where('start_activity', '<=', $endDate)
                                ->where('end_activity', '>=', $startDate);
                        });
                }
            }
        }

        return $experiences->get();
    }
}
