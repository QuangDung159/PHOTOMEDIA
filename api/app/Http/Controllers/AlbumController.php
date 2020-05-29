<?php

namespace App\Http\Controllers;

use App\Album;

class AlbumController extends Controller
{
    public function getAlbumSlider()
    {
        $listAlbum = Album::getAlbumSlider();
        if (count($listAlbum) != 0) {
            $listAlbumResult = self::removeAnotherPostFromListAlbum($listAlbum);
            return [
                'statusCode' => 200,
                'listAlbum' => $listAlbumResult,
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }
    }

    public function removeAnotherPostFromListAlbum($listAlbum)
    {
        $listAlbumResult = [];
        foreach ($listAlbum as $album) {
            $flag = 0;
            foreach ($listAlbumResult as $albumResult) {
                if ($album->album_id == $albumResult->album_id) {
                    $flag = 1;
                    break;
                }
            }

            if ($flag == 0) {
                array_push($listAlbumResult, $album);
            }
        }
        return $listAlbumResult;
    }

    public function getAlbumById($albumId)
    {
        if (empty($albumId)) {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }

        $album = Album::getAlbumById($albumId);
        if ($album) {
            return [
                'statusCode' => 200,
                'album' => $album,
            ];
        } else {
            return [
                'statusCode' => 500,
                'msg' => 'not found',
            ];
        }
    }
}
