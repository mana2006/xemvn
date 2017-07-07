<?php

namespace App\Http\Controllers\FrontEnd;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function showListPost() {
        $request = Request::create('/api/', 'GET');
        $posts = json_decode(Route::dispatch($request)->getContent());

        return view('layouts.body.index', ['posts' => $posts], compact('data', 'type'));
    }
}
