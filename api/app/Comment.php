<?php

namespace App;

use App\Constant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    public static function getListCommentByPost($postId)
    {
        $postId = intval($postId);
        return DB::table(Constant::TABLE_COMMENT)
            ->select(
                [
                    Constant::TABLE_POST . '.post_id',
                    Constant::TABLE_COMMENT . '.*',
                ]
            )
            ->join(
                Constant::TABLE_POST,
                Constant::TABLE_COMMENT . '.post_id',
                '=',
                Constant::TABLE_POST . '.post_id'
            )
            ->where(
                Constant::TABLE_COMMENT . '.post_id',
                '=',
                $postId
            )
            ->get();
    }

    public static function insertComment($data)
    {
        return DB::table(Constant::TABLE_COMMENT)
            ->insert($data);
    }
}
