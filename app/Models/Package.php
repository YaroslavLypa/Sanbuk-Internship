<?php

namespace App\Models;

use App\Models\Interfaces\StatusInterface;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Package
 *
 * @property int $id
 * @property int $experience_id
 * @property string $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Experience $experience
 * @method static Builder|Package newModelQuery()
 * @method static Builder|Package newQuery()
 * @method static Builder|Package query()
 * @method static Builder|Package whereCreatedAt($value)
 * @method static Builder|Package whereDescription($value)
 * @method static Builder|Package whereExperienceId($value)
 * @method static Builder|Package whereId($value)
 * @method static Builder|Package whereName($value)
 * @method static Builder|Package whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Package extends Model implements StatusInterface
{
    use HasFactory;

    protected $fillable = [
        'experience_id',
        'status',
        'name',
        'price',
        'description',
        'start_activity',
        'end_activity',
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'experience_id');
    }
}
