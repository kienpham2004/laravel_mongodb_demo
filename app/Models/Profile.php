<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $collection = 'profiles';

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'phone'
    ];

    protected $guarded = [];
}
