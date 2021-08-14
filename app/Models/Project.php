<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'images',
        'title',
        'sub_title',
        'location',
        'date',
        'components',
        'slug',
        'image_main',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
