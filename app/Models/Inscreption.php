<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscreption extends Model
{
    use HasFactory;

    protected $fillable = ["users_id","formation_id","name","telephone","email","title_de_formation","date_inscreption","status" ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function formations(){
        return $this->belongsTo(Formation::class);
    }
}
