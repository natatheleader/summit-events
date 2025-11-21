<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'company',
        'job_title',
        'registration_type',
        'message',
        'status',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}