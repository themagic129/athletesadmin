<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description'];

    protected $primaryKey = 'id';

    protected $table = 'exercise';

    public $timestamps = false;

    public function exercise_stats()
    {

        return $this->hasMany(ExerciseStats::class, 'exercise_id');
    }
}
