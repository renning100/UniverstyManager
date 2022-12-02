<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserExperience
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserExperience query()
 * @mixin \Eloquent
 */
class UserExperience extends Model
{
    protected $table = 'users_experiences';

    public $timestamps = false;

    protected $fillable = ['user_id', 'institute_id', 'position', 'employment_type_id', 'country_id', 'city_id', 'start_date', 'end_date', 'headline', 'description', 'media', 'link'];
}
