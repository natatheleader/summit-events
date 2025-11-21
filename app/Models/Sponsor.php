<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'logo',
        'website',
        'tier',
        'order',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}