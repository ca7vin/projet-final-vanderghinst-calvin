<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'subject',
        'bio_short',
        'bio_long',
        'phone',
        'skype',
    ]; // model_anchor
     
    protected $table = 'profs';

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
