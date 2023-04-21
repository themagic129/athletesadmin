<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Athlete;

class coaches_trainers extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'certifications', 'organization', 'first_name', 'last_name', 'phone', 'email', 'specialty'];

    public $timestamps = false;

    protected $primaryKey = 'user_id';

    protected $table = 'coaches_trainers';

    public function users()
    {

        return $this->belongsTo(User::class);
    }

    public function athletes()
    {
        return $this->hasMany(Athlete::class, 'coach_trainer_id');
    }
}
