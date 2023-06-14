<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOwner extends Model
{
    use HasFactory;

    protected $table = 'work_owner';

    protected $fillable = ['unique_id','creator_type','fname','mname', 'lname', 'company','country','state', 'city','address','zip', 'statement', 'statement_data'];
    //

    public $timestamps = false;
}
