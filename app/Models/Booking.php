<?php

namespace App\Models;

use App\Events\BookingCreated;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Booking
 *
 * @property int $id
 * @property int $user_id
 * @property int $package_id
 * @property int $price
 * @property array $user_data
 * @property array $package_data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Package $package
 * @property-read User $user
 * @method static Builder|Booking newModelQuery()
 * @method static Builder|Booking newQuery()
 * @method static Builder|Booking query()
 * @method static Builder|Booking whereCreatedAt($value)
 * @method static Builder|Booking whereId($value)
 * @method static Builder|Booking wherePackageData($value)
 * @method static Builder|Booking wherePackageId($value)
 * @method static Builder|Booking wherePrice($value)
 * @method static Builder|Booking whereUpdatedAt($value)
 * @method static Builder|Booking whereUserData($value)
 * @method static Builder|Booking whereUserId($value)
 * @mixin Eloquent
 */
class Booking extends Model
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_ERROR = 99;

    protected $casts = [
        'user_data' => 'array',
        'package_data' => 'array',
    ];

    protected $fillable = [
        'package_id',
        'price',
        'user_data',
        'package_data',
        'status',
    ];

    protected $dispatchesEvents = [
        'created' => BookingCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
