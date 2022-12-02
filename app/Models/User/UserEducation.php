<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserEducation
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserEducation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserEducation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserEducation query()
 * @mixin \Eloquent
 */
class UserEducation extends Model
{
    protected $table = 'users_educations';

    public $timestamps = false;

    protected $fillable = ['user_id', 'school_id', 'degree_id', 'program_id', 'start_year', 'end_year', 'grade', 'description', 'media', 'link'];
}
