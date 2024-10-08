<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class PricingEnq extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'skype',
        'pricing_id',
        'message',
    ];

     /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();
        Paginator::useBootstrap();
    }

}
