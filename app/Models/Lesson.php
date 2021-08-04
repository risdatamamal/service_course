<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    public $fillable = [
        'name', 'video', 'chapter_id'
    ];
}
