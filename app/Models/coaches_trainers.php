<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coaches_trainers extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','certifications','organization','first_name','last_name','phone', 'email', 'specialty'];
    
}
