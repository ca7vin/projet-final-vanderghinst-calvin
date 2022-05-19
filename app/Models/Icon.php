<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'name',
        'icon',
        'service_id',
    ]; // model_anchor
     
    protected $table = 'icons';
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
