<?php

namespace App\Models;


use App\Models\User;
use App\Models\Module;
use App\Models\Chapitre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function modules(){
        return $this->belongsTo(Module::class);
    }

    public function chapitres(){
        return $this->hasMany(Chapitre::class);
    }
}
