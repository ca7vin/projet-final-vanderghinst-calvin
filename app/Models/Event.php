<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'start_time',
        'end_time',
        'title',
        'description',
        'image1',
        'image2',
        'image3',
        'phone',
        'email',
        'user_id',
    ]; // model_anchor
     
    protected $table = 'events';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
