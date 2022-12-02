<?php

namespace App\Models\General;

use App\Models\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\General\City
 *
 * @property int $id
 * @property int|null $country_id
 * @property string|null $city_name
 * @property array|null $translated_name
 * @property string|null $local_name
 * @property string|null $administrative_region
 * @property float|null $latitude
 * @property float|null $longitude
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereAdministrativeRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereLocalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereTranslatedName($value)
 * @mixin \Eloquent
 * @property int|null $state_id
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 */
class City extends Model
{
    use HasTranslations;

    protected $table = 'cities';
    public $timestamps = false;

    protected $fillable = ['country_id', 'translated_name', 'city_name', 'local_name', 'administrative_region_id', 'latitude', 'longitude'];
    public $translatable = ['translated_name'];

}
