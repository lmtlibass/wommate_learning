<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cour;
use App\Models\Like;
use App\Models\Role;
use App\Models\Event;
use App\Models\Comment;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'password_confirmation'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->withTimestamps();
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function cours(){
        return $this->hasMany(Cour::class);
    }
    public function Events(){
        return $this->hasMany(Event::class);
    }
    

    //les autorisations (gates)

    /**
     * return bool 
     */
    public function isAdmin(){

        return $this->roles()->where('name', 'admin')->first();
    }
    //gate pour les createurs et administrateur
    public function isCreator(){
        return $this->roles()->where('name', 'createur')->first();
    }

    // /**
    //  * Gates pour la poartie admin du site
    //  */
    // public function backoffice(){
    //     return $this->roles()->where('name', 'admin')->first();
    // }
    

}
