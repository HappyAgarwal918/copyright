<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $table = 'website';

    protected $fillable = ['id', 'Url','status','method','user_id'];
    //

    public $timestamps = false;
}
