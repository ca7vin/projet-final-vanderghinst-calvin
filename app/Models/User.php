<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'email',
        'password',
        'role_id',
        'prof_id',
        'redacteur_id',
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

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function prof()
    {
        return $this->belongsTo(Prof::class);
    }
    public function redacteur()
    {
        return $this->belongsTo(Redacteur::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}

