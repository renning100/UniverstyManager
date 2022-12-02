<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\General\Continent
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $map
 * @method static \Illuminate\Database\Eloquent\Builder|Continent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Continent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Continent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Continent whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Continent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Continent whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Continent whereName($value)
 * @mixin \Eloquent
 */
class Continent extends Model
{
    protected $table = 'continents';

    public $timestamps = false;

    protected $fillable = ['code', 'name', 'map'];
}
