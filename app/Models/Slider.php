<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
     

     
    protected $fillable = [
        'first',
        'image',
        'title',
        'text',
        'textorange',
        'btntext',
        'btnlink',
    ]; // model_anchor
     
    protected $table = 'sliders';
}
