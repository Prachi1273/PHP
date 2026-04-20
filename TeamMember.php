<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'designation',
        'image',
        'email',
        'phone',
        'social_links',
        'highlights',
        'bio',
        'hero_title',
        'highlights_title',
        'highlights_empty_text',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'is_published',
    ];

    protected $casts = [
        'social_links' => 'array',
        'highlights' => 'array',
        'is_published' => 'boolean',
    ];

    public function getProfileImageUrlAttribute(): string
    {
        if (blank($this->image)) {
            return asset('images/avatar.png');
        }

        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        if (Storage::disk('public')->exists($this->image)) {
            return Storage::url($this->image);
        }

        if (Str::contains($this->image, '/')) {
            return asset($this->image);
        }

        return asset('images/team/' . $this->image);
    }
}
