<?php

namespace App\Models\User;

// use Illuminate\Database\Eloquent\Model;
use App\Models\General\LearningType;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot as Model;

/**
 * App\Models\User\StudentLearningType
 *
 * @property-read LearningType|null $learningType
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentLearningType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentLearningType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentLearningType query()
 * @mixin \Eloquent
 */
class StudentLearningType extends Model
{
    protected $table = 'student_learning_types';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = ['user_id', 'learning_type_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function learningType()
    {
        return $this->belongsTo(LearningType::class, 'learning_type_id', 'id');
    }
}
