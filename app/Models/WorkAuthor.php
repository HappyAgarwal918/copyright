<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkAuthor extends Model
{
    use HasFactory;

    protected $table = 'work_author';

    protected $fillable = ['unique_id', 'known', 'creator_type','fname','mname', 'lname', 'company','country','state', 'city','address','zip', 'nickname', 'pseudonym','hired','contribution'];
    //

    public $timestamps = false;
}
