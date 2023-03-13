<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleteMetric extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'athlete_id', 'max_velocity', 'max_throwing_velocity', 'blast_plane_score', 'blast_connection_score', 'blast_rotation_score', 'max_fb_spin_rate', 'ave_fb_spin_rate'];

    protected $primaryKey = 'id';

    protected $table = 'athlete_Metrics';

    public $timestamps = false;

    public function athlete()
    {

        return $this->belongsTo(Athlete::class, 'athlete_id');
    }
}
