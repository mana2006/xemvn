<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title', 'content', 'nickname', 'post_images', 'status', 'category', 'created_at', 'updated_at'
    ];

    public function statusInfo() {
        return $this->belongsTo('App\Status', 'status_id');
    }
    
    public function memberInfo() {
        return $this->belongsTo('App\Members', 'members_id');
    }
    
    public function categoryInfo() {
        return $this->belongsTo('App\Category', 'category_id');
    }
    
    public function userInfo() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
