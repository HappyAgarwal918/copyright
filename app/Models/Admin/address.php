<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $table = 'address';
   
    protected $fillable = ['id','seller_company_name','seller_address','seller_zip','seller_country'];

    public $timestamps = false;
}
