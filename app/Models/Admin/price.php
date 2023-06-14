<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;

    protected $table = 'package';
   
    protected $fillable = ['id','plan','name','regular_price','price','registered_works','file_per_works','protected_websites'];

    public $timestamps = false;
}
