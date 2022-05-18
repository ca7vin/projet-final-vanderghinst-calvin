<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'title',
        'description',
        'discipline',
        'price',
        'level',
        'start',
        'duration',
        'price_color',
        'course_id',
    ]; // model_anchor
     
    protected $table = 'courses';

    public function prof()
    {
        return $this->belongsTo(Prof::class);
    }
}
