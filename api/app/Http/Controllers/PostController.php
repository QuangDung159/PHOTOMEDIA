<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function getMostRecent()
    {
        $listMostRecent = Post::getMostRecent();
        if (count($listMostRecent)) {
            return [
                'statusCode' => 200,
                'listMostRecent' => $listMostRecent,
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'Not found',
            ];
        }
    }
}
