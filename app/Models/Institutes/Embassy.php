<?php

namespace App\Models\Institutes;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\Embassy
 *
 * @property int $id
 * @property int $school_id
 * @property string|null $embassy_name
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
 * @property string|null $campus
 * @property int|null $status
 * @property int|null $moderator_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Institutes\Institute|null $institutes
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereCampus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereEmbassyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Embassy whereWebsite($value)
 * @mixin \Eloquent
 */
class Embassy extends Model
{
    protected $table = 'embassies';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'embassy_name', 'email', 'phone', 'address1', 'address2', 'country_id', 'city_id', 'website', 'latitude', 'longitude', 'map_link', 'campus', 'status', 'moderator_id'];

    public function institutes()
    {
        return $this->belongsTo(Institute::class, 'institute_id', 'id');
    }
}
