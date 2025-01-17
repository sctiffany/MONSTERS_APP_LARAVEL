<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'pv', 'attack', 'image_url', 'description', 'defense', 'rarety_id', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function rarety()
    {
        return $this->belongsTo(Rarety::class, 'rarety_id');
    }
}
