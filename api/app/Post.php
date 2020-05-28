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
            ->get();
    }
}