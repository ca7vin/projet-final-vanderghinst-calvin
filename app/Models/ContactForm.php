<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'from',
        'to',
        'content',
    ]; // model_anchor
     
    protected $table = 'contact_forms';
}
