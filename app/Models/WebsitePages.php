<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitePages extends Model
{
    use HasFactory;

    protected $table = 'website_registered_pages';

    protected $fillable = ['p_id', 'name','page_url','unique_id','website_method','user_id'];
    //

    // public $timestamps = false;
}
