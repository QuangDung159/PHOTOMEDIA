<?php

namespace App;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Photo extends Model
{
    /**
     * @param int $pageNumber
     * @param int $numberPerPage
     * @return Collection
     */
    public static function getAllExistWWithPagination($pageNumber, $numberPerPage)
    {
        $pageNumber = intval($pageNumber);
        $numberPerPage = intval($numberPerPage);
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )
            ->orderBy(
                Constant::TABLE_PHOTO . '.photo_created_at',
                'desc'
            )
            ->skip(($pageNumber - 1) * $numberPerPage)
            ->take($numberPerPage)
            ->get();
    }

    /**
     * @return Model|Builder|object
     */
    public static function countAllExist()
    {
        return DB::table(Constant::TABLE_PHOTO)
            ->selectRaw('count(*) as number_of_photo')
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )->first();
    }

    /**
     * @param int $photoId
     * @param array $data
     * @return int
     */
    public static function updateById($photoId, $data)
    {
        $photoId = intval($photoId);
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0,
            )
            ->where(
                Constant::TABLE_PHOTO . '.photo_id',
                '=',
                $photoId
            )
            ->update($data);
    }

    /**
     * @param $photoId
     * @return Model|Builder|object|null
     */
    public static function getByIdExist($photoId)
    {
        $photoId = intval($photoId);
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )
            ->where(
                Constant::TABLE_PHOTO . '.photo_id',
                '=', $photoId
            )
            ->first();
    }

    /**
     * @param $photoName
     * @return Model|Builder|object|null
     */
    public static function getPhotoByName($photoName)
    {
        $photoName = strtolower(trim($photoName));
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )
            ->whereRaw(
                'lower(photo.photo_name) = "' . $photoName . '"'
            )
            ->first();
    }

    /**
     * @param array $data
     * @return bool
     */
    public static function insert($data)
    {
        return DB::table(Constant::TABLE_PHOTO)
            ->insert($data);
    }

    /**
     * @return Collection
     */
    public static function getAllInClient()
    {
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )
            ->where(
                Constant::TABLE_PHOTO . '.photo_status',
                '=',
                1
            )
            ->orderBy(Constant::TABLE_PHOTO . '.photo_created_at', 'desc')
            ->get();
    }
}
