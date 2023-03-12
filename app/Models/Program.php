<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description'];
    protected $table = 'program';
    public $timestamps = false;

    protected $primaryKey = 'id';


    public function workouts()
    {
        return $this->hasMany(Workout::class, 'program_id');
    }
}
