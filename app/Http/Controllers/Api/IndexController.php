<?php

namespace App\Http\Controllers\Api;

use App\Posts;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class IndexController extends Controller
{

    public function showListPost() {
        $posts = Posts::select('id', 'title', 'image', 'user_id', 'members_id', 'views', 'status_id', 'category_id', 'created_at')
        ->whereDel_flg(0)->paginate(5);
        
        $carbons = new Carbon();
        Carbon::setLocale('vi');

        $response = [ 'posts' => []];

        foreach ($posts as $post) {
            $response['posts'][] = [
                'id' => $post->id,
                'title' => $post->title,
                'image' => $post->image,
                'name' => ($post->userInfo != null) ? $post->userInfo : $post->memberInfo,
                'views' => $post->views,
                'created_at' => $carbons->createFromTimestamp(strtotime($post->created_at))->diffForHumans(),
            ];
        }

        return $response['posts'];
    }
}
