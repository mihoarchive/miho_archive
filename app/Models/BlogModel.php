<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class BlogModel extends Eloquent
{
    #protected $connection = 'miho_archive';
    protected $collection = 'blogs_detail';

    protected $fillable = [
        'title',
        'datetime',
        'article_img_link_str'
    ];

    

}
