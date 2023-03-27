<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseStats extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'workout_id', 'exercise_id', 'num_reps', 'num_sets'];

    protected $table = 'exercise_stats';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function workouts()
    {

        return $this->belongsTo(Workout::class, 'workout_id');
    }

    public function exercises()
    {

        return $this->belongsTo(Exercise::class, 'exercise_id');
    }
}
