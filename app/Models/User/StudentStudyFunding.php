<?php

namespace App\Models\User;

// use Illuminate\Database\Eloquent\Model;
use App\Models\General\StudyFunding;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot as Model;

/**
 * App\Models\User\StudentStudyFunding
 *
 * @property-read StudyFunding|null $studyFunding
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStudyFunding newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStudyFunding newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentStudyFunding query()
 * @mixin \Eloquent
 */
class StudentStudyFunding extends Model
{
    protected $table = 'student_study_fundings';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = ['user_id', 'study_funding_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function studyFunding()
    {
        return $this->belongsTo(StudyFunding::class, 'study_funding_id', 'id');
    }
}
