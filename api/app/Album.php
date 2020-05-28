<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Album extends Model
{
    public static function getAlbumSlider()
    {
        return DB::table(Constant::TABLE_ALBUM)
            ->select(
                [
                    Constant::TABLE_ALBUM . '.album_name',
                    Constant::TABLE_ALBUM . '.album_id',
                    Constant::TABLE_POST . '.post_panel_image',
                ]

            )
            ->join(
                Constant::TABLE_POST,
                Constant::TABLE_ALBUM . '.album_id',
                '=',
                Constant::TABLE_POST . '.album_id'
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_is_deleted',
                '=',
                0
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
