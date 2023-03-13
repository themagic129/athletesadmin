<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];


    public function athlete()
    {

        return $this->hasMany(Athlete::class);
    }
    public $timestamps = false;
}
