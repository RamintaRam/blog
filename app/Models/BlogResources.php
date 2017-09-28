<?php

namespace App;

use App\Models\CoreModel;


class BlogResources extends CoreModel
{
    protected $table = 'blog_resources';
    protected $fillable = ['id', 'path', 'mime_size', 'size', 'width', 'height'];
}
