<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = ['heading', 'content', 'image', 'video', 'address', 'phone', 'email', 'open_time', 'close_time', 'facebook', 'instagram', 'linkedin', 'twitter', 'youtube'];
}
