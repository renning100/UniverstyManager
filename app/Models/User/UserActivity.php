<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserActivity
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserActivity query()
 * @mixin \Eloquent
 */
class UserActivity extends Model
{
    protected $table = 'users_activities';

    public $timestamps = false;

    protected $fillable = ['user_id', 'article_id', 'blog_id', 'comparison_id', 'download_id', 'guide_id', 'program_id', 'university_id'];
}
