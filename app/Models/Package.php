<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $collection = 'packages';

    protected $guarded = [];
}
