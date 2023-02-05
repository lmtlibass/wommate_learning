<?php

namespace App\Models;

use App\Models\Cour;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapitre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'number',
        'description',
        'content',
        'cour_id'
    ];

    public function cour(){
        return $this->belongsTo(Cour::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
