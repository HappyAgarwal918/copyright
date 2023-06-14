<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takedown extends Model
{
    use HasFactory;

    protected $table = 'takedown';

    protected $fillable = ['id','link','source_online','website_url','website_name','target','source_comments','target_comments','extra_comments','status','takedown_id','user_id'];
    //

    // public $timestamps = false;
}
