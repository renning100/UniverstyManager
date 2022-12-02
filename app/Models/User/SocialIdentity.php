<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\SocialIdentity
 *
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIdentity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIdentity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialIdentity query()
 * @mixin \Eloquent
 */
class SocialIdentity extends Model
{
    protected $table = 'social_identities';

    protected $fillable = ['user_id', 'provider_name', 'provider_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
