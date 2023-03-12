<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'program_id', 'description'];

    protected $table = 'workout';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function programs()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function exercise_stats()
    {

        return $this->hasMany(ExerciseStats::class, 'workout_id');
    }
}
