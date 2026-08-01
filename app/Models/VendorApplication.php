<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorApplication extends Model
{
    protected $fillable = [
        'full_name',
        'facebook_username',
        'business_name',
        'email',
        'event_dates',
        'booth',
        'base',
        'categories',
    ];
}
