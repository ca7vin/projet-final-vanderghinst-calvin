<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'title',
        'text',
        'quote',
        'image',
        'redacteur_id',
    ]; // model_anchor
     
    protected $table = 'posts';

    public function redacteur()
    {
        return $this->belongsTo(Redacteur::class);
    }
}
