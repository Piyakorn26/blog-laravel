<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog_content extends Model
{


    protected $table = 'blog_content';
    protected $primaryKey = 'idcontent_blog';

    protected $fillable = [
        'idcontent_blog', 'idblog_categories', 'title_tag','slug','summary'
    ];
}
