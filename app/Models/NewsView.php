<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsView extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id',
        'ip_address',
        'date',
    ];
}
