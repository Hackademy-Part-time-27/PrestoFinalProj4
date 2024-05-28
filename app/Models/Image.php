<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'announcements_id'];

    public function announcements()
    {
        return $this->belongsTo(Announcement::class);
    }
}