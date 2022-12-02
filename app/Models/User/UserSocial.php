<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserSocial
 *
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSocial query()
 * @mixin \Eloquent
 */
class UserSocial extends Model
{
    protected $table = 'users_socials';

    public $timestamps = false;

    protected $fillable = ['user_id', 'sm_id', 'attribute'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
