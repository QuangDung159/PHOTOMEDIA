<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Photo;
use Illuminate\Http\Request;

class HelperController extends Controller
{

    /**
     * @param object $object
     * @return mixed
     */
    public static function convertStdToArray($object)
    {
        return json_decode(json_encode($object), True);
    }

    /**
     * @param array $array
     * @return mixed
     */
    public static function convertArrayToStd($array)
    {
        return json_decode(json_encode($array));
    }

    /**
     * @param array $array
     * @param int|string $key
     * @return array
     */
    public static function uniqueMultiFieldArray($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    /**
     * @param array $arrayParam
     * @return string
     */
    public static function buildUrlWithParams($arrayParam)
    {
        $url = '?';
        foreach ($arrayParam as $key => $value) {
            $url .= $key . '=' . $value . '&';
        }
        return $url;
    }

    /**
     * @return array
     */
    public static function getAssocAdmin()
    {
        $listAdmin = Admin::getAll();
        $listAdmin = HelperController::convertStdToArray($listAdmin);
        return array_column($listAdmin, 'admin_name', 'admin_id');
    }

    /**
     * @return array
     */
    public static function getAssocPhotoUrl()
    {
        $listPhoto = Photo::getAllExitStatus();
        $listPhoto = HelperController::convertStdToArray($listPhoto);

        return array_column($listPhoto, 'photo_url', 'photo_id');
    }

    /**
     * @param array $array
     * @param string $key
     * @return array
     */
    public static function getValuesByKey($array, $key)
    {
        $result = [];
        foreach ($array as $item) {
            $item = HelperController::convertStdToArray($item);
            array_push($result, $item[$key]);
        }

        return $result;
    }
}
