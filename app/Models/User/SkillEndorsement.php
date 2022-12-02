<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\SkillEndorsement
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $skill_id
 * @property string|null $endorsed_by
 * @property string|null $list_of_skills
 * @property string|null $certifications
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement query()
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereCertifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereEndorsedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereListOfSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SkillEndorsement whereUserId($value)
 * @mixin \Eloquent
 */
class SkillEndorsement extends Model
{
    protected $table = 'skills_endorsements';

    public $timestamps = false;

    protected $fillable = ['user_id', 'skill_id', 'endorsed_by'];
}
