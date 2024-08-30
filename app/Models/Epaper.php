<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Epaper extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        Paginator::useBootstrap();

    }

}
