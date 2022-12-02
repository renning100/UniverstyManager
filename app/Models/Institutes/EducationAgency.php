<?php

namespace App\Models\Institutes;

use App\Models\General\Country;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\EducationAgency
 *
 * @property int $id
 * @property int $school_id
 * @property string|null $agency_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address1
 * @property string|null $address2
 * @property int|null $country_id
 * @property int|null $city_id
 * @property string|null $agency_countries
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
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereAgencyCountries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereAgencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereCampus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationAgency whereWebsite($value)
 * @mixin \Eloquent
 */
class EducationAgency extends Model
{
    protected $table = 'education_agencies';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'agency_name', 'email', 'phone', 'address1', 'address2', 'country_id', 'city_id', 'agency_countries', 'website', 'latitude', 'longitude', 'map_link', 'campus', 'status', 'moderator_id'];

    public function institutes()
    {
        return $this->belongsTo(Institute::class, 'institute_id', 'id');
    }

    public function agencyCountries()
    {
        $this->country_names = $this->agency_countries
            ? Country::whereNotNull('country_name')
            ->whereIn('id', explode(',', $this->agency_countries))
            ->pluck('country_name')
            ->all()
            : [];
    }
}
