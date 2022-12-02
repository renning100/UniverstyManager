<?php

namespace App\Models\User;

// use Illuminate\Database\Eloquent\Model;
use App\Models\General\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Pivot as Model;

/**
 * App\Models\User\StudentProgram
 *
 * @property-read Program|null $program
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProgram newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProgram newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentProgram query()
 * @mixin \Eloquent
 */
class StudentProgram extends Model
{
    protected $table = 'student_programs';

    public $incrementing = true;

    public $timestamps = false;

    protected $fillable = ['user_id', 'program_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }
}
