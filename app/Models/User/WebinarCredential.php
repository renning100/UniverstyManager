<?php

namespace App\Models\User;

use App\Models\Institutes\University;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User\WebinarCredential
 *
 * @property int $id
 * @property int|null $school_id
 * @property string|null $key
 * @property string|null $secret
 * @property string|null $email
 * @property string|null $account_id
 * @property string|null $verification_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read University|null $university
 * @property-read WebinarCredential|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebinarCredential whereVerificationToken($value)
 * @mixin \Eloquent
 */
class WebinarCredential extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(WebinarCredential::class, 'campus_id', 'campus_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'campus_id', 'id');
    }
}
