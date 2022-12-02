<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserSkill
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSkill query()
 * @mixin \Eloquent
 */
class UserSkill extends Model
{
    protected $table = 'users_skills';

    public $timestamps = false;

    protected $fillable = ['user_id', 'skill_id'];
}
