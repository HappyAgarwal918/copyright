<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkFiles extends Model
{
    use HasFactory;

    protected $fillable = ['id','unique_id','file_name','file_path','file_size'];
}