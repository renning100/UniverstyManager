<?php

namespace App\Models\User;

use App\Models\Booth\BoothMaterial;
use App\Models\Institutes\Workshop;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\UserBag
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $material_id
 * @property int|null $type
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read BoothMaterial|null $boothMaterial
 * @property-read \Illuminate\Database\Eloquent\Collection|BoothMaterial[] $boothMaterials
 * @property-read int|null $booth_materials_count
 * @property-read Workshop|null $workshop
 * @property-read Workshop|null $workshops
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereMaterialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserBag whereUserId($value)
 * @mixin \Eloquent
 */
class UserBag extends Model
{
    protected $table = 'users_bags';

    public $timestamps = false;

    protected $fillable = ['student_id', 'material_id', 'type'];

    /**
     * Definition: 'type' attribute values
     * Specifies Material Type added to the User Bag
     */
    const TYPE_WORKSHOP = 3;

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'material_id', 'id');
    }

    public function boothMaterial()
    {
        return $this->belongsTo(BoothMaterial::class, 'material_id', 'id');
    }

    // to be removed
    public function workshops()
    {
        return $this->belongsTo(Workshop::class, 'material_id', 'id');
    }

    // to be removed
    public function boothMaterials()
    {
        return $this->hasMany(BoothMaterial::class, 'material_id', 'id');
    }
}
