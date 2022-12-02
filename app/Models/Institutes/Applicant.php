<?php

namespace App\Models\Institutes;

use App\Models\General\Degree;
use App\Models\General\Program;
use App\Models\User;
use App\Models\User\UserBio;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\Applicant
 *
 * @property int $id
 * @property int|null $school_id
 * @property int|null $agent_id
 * @property string|null $apply_date
 * @property int|null $user_id
 * @property int|null $faculty_id
 * @property int|null $degree_id
 * @property int|null $program_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read Degree|null $degrees
 * @property-read \App\Models\Institutes\Institute|null $institute
 * @property-read Program|null $programs
 * @property-read \App\Models\Institutes\University|null $university
 * @property-read User|null $user
 * @property-read UserBio|null $userBio
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereApplyDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereDegreeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Applicant whereUserId($value)
 * @mixin \Eloquent
 */
class Applicant extends Model
{
    protected $table = 'applicants';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'campus_id', 'agent_id', 'student_id', 'apply_date', 'faculty_id', 'degree_id', 'program_id'];

    /**
     * The attributes that should be cast.
     * @var array
     */
    // protected $casts = [
    //     'apply_date' => 'datetime:F j, Y',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function userBio()
    {
        return $this->belongsTo(UserBio::class, 'student_id', 'user_id');
    }

    public function programs()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }

    public function degrees()
    {
        return $this->belongsTo(Degree::class, 'degree_id', 'id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'campus_id', 'id');
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id', 'id');
    }
}
