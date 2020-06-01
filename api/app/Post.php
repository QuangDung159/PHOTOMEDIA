<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public static function getMostRecent()
    {
        return DB::table(Constant::TABLE_POST)
            ->select(
                [
                    Constant::TABLE_ALBUM . '.album_name',
                    Constant::TABLE_POST . '.*',
                ]
            )
            ->join(
                Constant::TABLE_ALBUM,
                Constant::TABLE_POST . '.album_id',
                '=',
                Constant::TABLE_ALBUM . '.album_id'
            )
            ->where(
                Constant::TABLE_POST . '.post_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_POST . '.post_is_deleted',
                '=',
                0
            )
            ->orderBy(
                Constant::TABLE_POST . '.post_created_at',
                'desc'
            )
            ->limit(6)
            ->get();
    }

    public static function getPostById($postId)
    {
        $postId = intval($postId);
        return DB::table(Constant::TABLE_POST)
            ->select(
                [
                    Constant::TABLE_POST . '.*',
                    Constant::TABLE_ALBUM . '.album_name',
                    Constant::TABLE_ALBUM . '.album_id',
                ]
            )
            ->join(
                Constant::TABLE_ALBUM,
                Constant::TABLE_POST . '.album_id',
                '=',
                Constant::TABLE_ALBUM . '.album_id'
            )
            ->where(
                Constant::TABLE_POST . '.post_id',
                '=',
                $postId
            )
            ->where(
                Constant::TABLE_POST . '.post_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_POST . '.post_is_deleted',
                '=',
                0
            )
            ->first();
    }

    public static function getListPostByAlbum($albumId)
    {
        $albumId = intval($albumId);
        return DB::table(Constant::TABLE_POST)
            ->select(
                [
                    Constant::TABLE_POST . '.*',
                    Constant::TABLE_ALBUM . '.album_name',
                ]
            )
            ->join(
                Constant::TABLE_ALBUM,
                Constant::TABLE_POST . '.album_id',
                '=',
                Constant::TABLE_ALBUM . '.album_id'
            )
            ->where(
                Constant::TABLE_POST . '.post_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_POST . '.post_is_deleted',
                '=',
                0
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_id',
                '=',
                $albumId
            )
            ->get();
    }

    public static function getAllPost()
    {
        return DB::table(Constant::TABLE_POST)
            ->select(
                [
                    Constant::TABLE_POST . '.*',
                    Constant::TABLE_ALBUM . '.album_name',
                ]
            )
            ->join(
                Constant::TABLE_ALBUM,
                Constant::TABLE_POST . '.album_id',
                '=',
                Constant::TABLE_ALBUM . '.album_id'
            )
            ->where(
                Constant::TABLE_POST . '.post_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_POST . '.post_is_deleted',
                '=',
                0
            )
            ->get();
    }
}
