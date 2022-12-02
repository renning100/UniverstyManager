<?php

namespace App\Models\Institutes;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\Company
 *
 * @property int $id
 * @property int|null $institute_id
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
 * @property string|null $status
 * @property int|null $moderator_id
 * @property string|null $company_logo
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCompanyLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereInstituteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
 * @mixin \Eloquent
 */
class Company extends Model
{
    protected $table = 'companies';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'name', 'email', 'phone', 'address1', 'address2', 'country_id', 'city_id', 'website', 'latitude', 'longitude', 'map_link', 'status', 'moderator_id'];
}
