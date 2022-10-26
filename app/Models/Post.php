<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $appends = ['body_format'];
    protected $guarded = [];

    public function getBodyFormatAttribute(): string
    {
        return Str::limit($this->body, 50, '(...)');
    }
}
