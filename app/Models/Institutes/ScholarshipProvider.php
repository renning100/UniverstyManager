<?php

namespace App\Models\Institutes;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\ScholarshipProvider
 *
 * @property int $id
 * @property int $school_id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address1
 * @property string|null $address2
 * @property int|null $country_id
 * @property int|null $city_id
 * @property string|null $website
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $map_link
 * @property int|null $status
 * @property int|null $moderator_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ScholarshipProvider whereWebsite($value)
 * @mixin \Eloquent
 */
class ScholarshipProvider extends Model
{
    protected $table = 'scholarships_providers';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'name', 'email', 'phone', 'address1', 'address2', 'country_id', 'city_id', 'website', 'latitude', 'longitude', 'map_link', 'status', 'moderator_id'];
}
