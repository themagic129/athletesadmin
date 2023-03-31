<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\coaches_trainers;


class Athlete extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'organization', 'team', 'coach_trainer_id', 'program', 'first_name', 'last_name', 'birthday', 'height', 'weight', 'bats', 'throws', 'phone', 'email', 'profile_photo', 'workout_id'];

    protected $table = 'athletes';


    public function users()
    {

        return $this->belongsTo(User::class);
    }

    public function coach_trainer()
    {
        return $this->belongsTo(coaches_trainers::class, 'coach_trainer_id');
    }

    public $timestamps = false;
    protected $primaryKey = 'user_id';

    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = \Carbon\Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function athletemetric()
    {

        return $this->hasMany(AthleteMetric::class, 'athlete_id');
    }

    public function workout()
    {

        return $this->belongsTo(Workout::class, 'workout_id');
    }
}
