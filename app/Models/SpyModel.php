<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpyModel extends Model
{
    use HasFactory;

    protected $table = 'spy';

    protected $fillable = ['domain','user_id'];

    // public $timestamps = false;
}
