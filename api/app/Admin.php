<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{

    /**
     * @return Collection
     */
    public static function getAll()
    {
        return DB::table(Constant::TABLE_ADMIN)
            ->get();

    }

    /**
     * @param int $adminId
     * @return Model|Builder|object|null
     */
    public static function getByIdExist($adminId)
    {
        $adminId = intval($adminId);
        return DB::table(Constant::TABLE_ADMIN)
            ->where(
                Constant::TABLE_ADMIN . '.admin_id',
                '=',
                $adminId
            )
            ->where(
                Constant::TABLE_ADMIN . '.admin_is_deleted',
                '=',
                0
            )
            ->first();
    }
}
