<?php

namespace App\Models\Institutes;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Institutes\TraningCenter
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
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter query()
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TraningCenter whereWebsite($value)
 * @mixin \Eloquent
 */
class TraningCenter extends Model
{
    protected $table = 'traning_centers';

    public $timestamps = false;

    protected $fillable = ['institute_id', 'name', 'email', 'phone', 'address1', 'address2', 'country_id', 'city_id', 'website', 'latitude', 'longitude', 'map_link', 'status', 'moderator_id'];
}
