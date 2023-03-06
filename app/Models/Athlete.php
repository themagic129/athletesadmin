<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','organization','team','coach_trainer_id','program','first_name','last_name','birthday','height','weight','bats','throws','phone','email','profile_photo'];

    public function users(){

        return $this->belongsTo(User::class);

    }

    public $timestamps = false;


}
