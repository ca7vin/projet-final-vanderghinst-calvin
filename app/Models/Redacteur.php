<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redacteur extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'name',
    ]; // model_anchor
     
    protected $table = 'redacteurs';

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
