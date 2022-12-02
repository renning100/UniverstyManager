<?php

namespace App\Models\General;

use App\Models\Institutes\Language;
use App\Models\Institutes\University;
use App\Models\Traits\HasTranslations;
use App\Models\User;
use App\Models\User\StudentDestination;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\General\Country
 *
 * @property int $id
 * @property string|null $code
 * @property int|null $continent_id_1
 * @property int|null $continent_id_2
 * @property int|null $continent_id_3
 * @property int|null $subcontinent_id_1
 * @property int|null $subcontinent_id_2
 * @property int|null $subcontinent_id_3
 * @property string|null $country_name
 * @property array|null $translated_name
 * @property string|null $local_name
 * @property string|null $url
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $flag
 * @property string|null $map
 * @property string|null $language
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\General\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Language[] $languages
 * @property-read int|null $languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|StudentDestination[] $studentDestinationsPivot
 * @property-read int|null $student_destinations_pivot_count
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $students
 * @property-read int|null $students_count
 * @property-read \Illuminate\Database\Eloquent\Collection|University[] $universities
 * @property-read int|null $universities_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereContinentId1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereContinentId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereContinentId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLocalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSubcontinentId1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSubcontinentId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereSubcontinentId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTranslatedName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUrl($value)
 * @mixin \Eloquent
 * @property string|null $country_code
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryCode($value)
 */
class Country extends Model
{
    use HasTranslations;

    protected $table = 'countries';

    public $timestamps = false;

    protected $fillable = ['code', 'translated_name', 'continent_id_1', 'continent_id_2', 'continent_id_3', 'subcontinent_id_1', 'subcontinent_id_2', 'subcontinent_id_3', 'country_name', 'local_name', 'url', 'latitude', 'longitude', 'flag', 'map'];
    public $translatable = ['translated_name'];

    public function universities()
    {
        return $this->hasMany(University::class, 'country_id', 'id');
    }

    public function studentDestinationsPivot()
    {
        return $this->hasMany(StudentDestination::class, 'country_id', 'id');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'student_destinations', 'country_id', 'user_id')->using(StudentDestination::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'country_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
