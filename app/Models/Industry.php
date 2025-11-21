<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($industry) {
            if (empty($industry->slug)) {
                $industry->slug = Str::slug($industry->name);
            }
        });
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}