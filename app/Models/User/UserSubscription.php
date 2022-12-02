<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserSubscription
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSubscription query()
 * @mixin \Eloquent
 */
class UserSubscription extends Model
{
    protected $table = 'users_subscriptions';

    public $timestamps = false;

    protected $fillable = ['user_id', 'products', 'universities', 'participating', 'newsletters'];
}
