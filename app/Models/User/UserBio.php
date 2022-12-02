<?php

namespace App\Models\User;

use App\Models\General\Gender;
use App\Models\General\Grade;
use App\Models\Institutes\Workshop;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserBio
 *
 * @property-read Gender|null $gender
 * @property-read mixed $profile_photo
 * @property-read Grade|null $grade
 * @property-read Grade|null $grades
 * @property-read User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|Workshop[] $workshops
 * @property-read int|null $workshops_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property int|null $nationality_id
 * @property int|null $gender_id
 * @property int|null $grade_id
 * @property string|null $about
 * @property string|null $birthday
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $mobile
 * @property string|null $address
 * @property int|null $country_id
 * @property int|null $city_id
 * @property string|null $bio_brief
 * @property string|null $study_fundings
 * @property string|null $learning_types
 * @property string|null $preferred_programs
 * @property int|null $preferred_destination
 * @property string $privacy_consent
 * @property string $parent_flag
 * @property string|null $planned_year
 * @property string|null $headline
 * @property string|null $position
 * @property string|null $facebook_id
 * @property string|null $linkedin_id
 * @property string|null $work_experience
 * @property string|null $age
 * @property string|null $curriculum_id
 * @property string|null $fee_range
 * @property string|null $profile_completion_status
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereBioBrief($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereCurriculumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereFacebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereFeeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereGenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereLearningTypes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereLinkedinId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereNationalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereParentFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio wherePlannedYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio wherePreferredDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio wherePreferredPrograms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio wherePrivacyConsent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereProfileCompletionStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereStudyFundings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereWorkExperience($value)
 * @property int|null $grade_scale_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereGradeScaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereGrades($value)
 * @property int|null $mobile_country_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereMobileCountryId($value)
 * @property int|null $study_level_id
 * @property int|null $still_studying
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereStillStudying($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBio whereStudyLevelId($value)
 */
class UserBio extends Model
{
    public $timestamps = false;

    protected $fillable = ['user_id','position','nationality_id', 'gender_id', 'about', 'birthday', 'first_name', 'last_name', 'mobile', 'email', 'country_id', 'city_id', 'bio_brief', 'profile_photo', 'orcid_id', 'google_scholar_id', 'publons_url', 'research_gate_url', 'scopus_url', 'study_fundings', 'learning_types', 'preferred_programs', 'preferred_destination', 'privacy_consent', 'parent_flag', 'grade_id', 'active'];
    protected $guarded = ['photo','id'];
    /**
     * Definition: 'active' attribute values
     * Judges completion of a profile
     */
    const PROFILE_INCOMPLETE = 0;
    const PROFILE_COMPLETE   = 1;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function messages()
    {
        return $this->belongsTo(Message::class, 'user_id', 'user_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }

    // To be removed
    public function grades()
    {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function workshops()
    {
        return $this->hasMany(Workshop::class, 'speaker_id', 'user_id');
    }
}
