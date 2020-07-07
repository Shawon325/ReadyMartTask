<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_title', 'post_type', 'post_section', 'image', 'video', 'description', 'status'];

    public function validation()
    {
        return [
            'post_title'   => 'required|unique:posts,post_title',
            'post_type'    => 'required',
            'post_section' => 'required',
            'description'  => 'required',
        ];
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
