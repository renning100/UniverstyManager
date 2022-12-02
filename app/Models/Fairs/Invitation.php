<?php

namespace App\Models\Fairs;

use App\Models\Institutes\Institute;
use App\Models\Institutes\University;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Fairs\Invitation
 *
 * @property int $id
 * @property int|null $status
 * @property int|null $fair_id
 * @property int|null $school_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Fairs\Fair|null $fair
 * @property-read Institute|null $institute
 * @property-read University|null $university
 * @property-read University|null $universityCampus
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereFairId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $university_id
 * @property int|null $processed_by
 * @property int|null $accepted_by_school
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereAcceptedBySchool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereProcessedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invitation whereUniversityId($value)
 */
class Invitation extends Model
{
    use HasFactory;

    protected $table = 'invitations';

    public $timestamps = false;

    protected $fillable = ['status', 'fair_id', 'institute_id', 'campus_id'];

    /**
     * Definition: 'status' attribute values
     */
    // const INVITED = 0;
    // const CONFIRMED = 1;
    // const REJECTED = 2;
    // const TO_BE_INVITED = 3;
    const ACCEPTED = 1;
    const DECLINED = 2;
    const CANCELLED = 3;

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function fair()
    {
        return $this->belongsTo(Fair::class, 'fair_id', 'id');
    }
}
