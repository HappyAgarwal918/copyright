<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    use HasFactory;

    protected $table = 'works';

    protected $fillable = ['unique_id','type','title','alt_titles','description','completion_year','first_publication','publication_date','first_publication_country','derivative','derivative_old','derivative_new','compilation','compilation_data','self_author','self_owner','upload_files_now'];

    // public $timestamps = false;
}
