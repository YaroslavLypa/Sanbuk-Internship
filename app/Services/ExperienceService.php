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
        $experiences = Experience::query()
            ->with('packages');

        if ($filterParams !== null) {
            foreach ($filterParams as $key => $values) {
                if ($key === 'type') {
                    $experiences
                        ->whereHas('type', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }

                if ($key === 'trip_type') {
                    $experiences
                        ->whereHas('tripType', function (Builder $query) use ($values) {
                            $query->whereIn('id', $values);
                        });
                }

                if ($key === 'vendor') {
                    $experiences
                        ->whereHas('vendor', function (Builder $query) use ($values) {
                            $query->where('status', StatusInterface::STATUS_ACTIVE)
                                ->whereIn('id', $values);
                        });
                }

                if ($key === 'activity-period') {
                    $startDate = Carbon::parse($values['start-date']);
                    $endDate = Carbon::parse($values['end-date']);

                    $experiences
                        ->whereHas('packages', function (Builder $query) use ($startDate, $endDate) {
                            $query->where('status', StatusInterface::STATUS_ACTIVE)
                                ->whereDate('start_activity', '>=', $startDate)
                                ->whereDate('end_activity', '<=', $endDate);
                        });
                }
            }
        }

        return $experiences->get();
    }
}
