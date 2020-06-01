<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getCommentByPost($postId)
    {
        if (empty($postId)) {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }

        $listComment = [];
        $listComment = Comment::getListCommentByPost($postId);
        if (count($listComment) != 0) {
            return [
                'statusCode' => 200,
                'listComment' => $listComment,
                'count' => count($listComment),
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }
    }

    public function sendComment(Request $req)
    {
        $comment = $req->comment;
        $data = [
            'comment_content' => $req->comment['content'],
            'post_id' => $req->postId,
            'comment_created_at' => time(),
            'comment_created_by' => 1,
        ];
        $success = Comment::insertComment($data);
        if ($success) {
            return [
                'statusCode' => 200,
            ];
        } else {
            [
                'statusCode' => 500,
                'msg' => 'fail',
            ];
        }
    }
}
