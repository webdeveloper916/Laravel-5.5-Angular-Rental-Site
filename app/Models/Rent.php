<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rent extends Model {

    public  $timestamps = false;
    protected $table   = 'rent';
}