<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserIntrest
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserIntrest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserIntrest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserIntrest query()
 * @mixin \Eloquent
 */
class UserIntrest extends Model
{
    protected $table = 'users_intrests';

    public $timestamps = false;

    protected $fillable = ['user_id', 'degree_id', 'program_id', 'country_id', 'city_id'];
}
