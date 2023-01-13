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
    protected $guarded = ['id'];
    // protected $with = ['chapitres'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function chapitres(){
        return $this->hasMany(Chapitre::class);
    }
}
