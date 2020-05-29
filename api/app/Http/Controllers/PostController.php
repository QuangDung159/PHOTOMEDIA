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

    public function getPostById($postId)
    {
        if (empty($postId)) {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }

        $post = Post::getPostById($postId);
        if ($post) {
            return [
                'statusCode' => 200,
                'post' => $post,
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }
    }

    public function getPostByAlbum($albumId)
    {
        if (empty($albumId)) {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }

        $listPost = Post::getListPostByAlbum($albumId);
        if (count($listPost) != 0) {
            return [
                'statusCode' => 200,
                'listPost' => $listPost,
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }
    }
}
