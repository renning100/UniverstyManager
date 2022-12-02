<?php

namespace App\Models\User;

// use Illuminate\Database\Eloquent\Model;
use App\Models\General\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot as Model;

/**
 * App\Models\User\StudentDestination
 *
 * @property-read Country|null $country
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentDestination newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentDestination newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentDestination query()
 * @mixin \Eloquent
 */
class StudentDestination extends Model
{
    protected $table = 'student_destinations';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = ['user_id', 'country_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
