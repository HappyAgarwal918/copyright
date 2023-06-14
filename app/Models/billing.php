<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    use HasFactory;

    protected $table = 'billing';

    protected $fillable = ['first_name','last_name','company','address','city','zip','country','state','user_id','price','package_id','package_name','payment_status','unique_id','invoice_id','phone','bill_email','invoice_path'];

    // public $timestamps = false;
}
