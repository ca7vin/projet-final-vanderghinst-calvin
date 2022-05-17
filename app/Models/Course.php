<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'prof',
        'title',
        'description',
        'discipline',
        'price',
        'level',
        'start',
        'duration',
    ]; // model_anchor
     
    protected $table = 'courses';
}
