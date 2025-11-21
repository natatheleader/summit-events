<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'tagline',
        'description',
        'overview',
        'start_date',
        'end_date',
        'venue',
        'location',
        'website_url',
        'primary_color',
        'secondary_color',
        'logo',
        'hero_image',
        'expected_attendees',
        'speakers_count',
        'organizations_count',
        'is_featured',
        'is_active',
        'stats',
        'why_attend',
        'why_sponsor',
        'contact_email',
        'contact_phone',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'stats' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = Str::slug($event->name);
            }
        });
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class)->orderBy('order');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class)->orderBy('order');
    }

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class)->orderBy('order');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }

    public function getFormattedDateAttribute()
    {
        if ($this->start_date->format('Y-m-d') === $this->end_date->format('Y-m-d')) {
            return $this->start_date->format('F j, Y');
        }
        
        return $this->start_date->format('F j') . ' - ' . $this->end_date->format('j, Y');
    }
}