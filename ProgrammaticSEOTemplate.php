<?php

namespace Modules\ProgrammaticSEO\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammaticSEOTemplate extends Model
{
    protected $table = 'programmatic_seo_templates';

    protected $fillable = [
        'name',
        'slug_pattern',
        'title_template',
        'meta_description_template',
        'h1_template',
        'content_template',
        'is_active'
    ];
}

