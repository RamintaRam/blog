<?php

namespace App;


use App\Models\CoreModel;


class BlogPosts extends CoreModel
{
    protected $table = 'blog_posts';
    protected $fillable = ['id', 'user_id', 'resource_id', 'title', 'text', 'link'];

protected $hidden = [ 'user_id', 'link' ,'resource_id', 'updated_at', 'created_at', 'deleted_at', 'count'];


protected $with = ['image'];

    public function image()
    {
        return $this->hasOne(BlogResources::class, 'id', 'resource_id');
    }
}
