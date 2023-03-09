<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Athlete;

class coaches_trainers extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','certifications','organization','first_name','last_name','phone', 'email', 'specialty'];

    public $timestamps = false;

    protected $primaryKey = 'user_id';

    public function athletes()
{
    return $this->hasMany(Athlete::class, 'coach_trainer_id');
    
}


    
}
