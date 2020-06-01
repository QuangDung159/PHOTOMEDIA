<?php

namespace App {
    class Constant
    {
        const TABLE_ADMIN = 'admin';
        const TABLE_COMMENT = 'comment';
        const TABLE_POST = 'post';
        const TABLE_USER = 'post';
        const TABLE_ALBUM = 'album';
        const TABLE_PHOTO = 'photo';
        const TABLE_SEEDING = 'seeding';
        const TABLE_LOG = 'log';
        const TABLE_ACCESSION = 'accession';

        const CONTROLLER_ALBUM = 'AlbumController@';
        const CONTROLLER_PHOTO = 'PhotoController@';
        const CONTROLLER_POST = 'PostController@';
        const CONTROLLER_MAIL = 'MailController@';
        const CONTROLLER_ACCESSION = 'AccessionController@';
        const CONTROLLER_ADMIN = 'AdminController@';
        const CONTROLLER_COMMENT = 'CommentController@';

        const PATH_ADMIN_ALBUM = 'admin.pages.album.';
        const PATH_ADMIN_PHOTO = 'admin.pages.photo.';
        const PATH_ADMIN_NOTFOUND = 'admin.pages.404';

        const PATH_HOME = 'client.pages.home';
        const PATH_SINGLE = 'client.pages.single';
        const PATH_ABOUT = 'client.pages.about';

        const ACTION_LISTING = 'listing';
        const ACTION_DETAIL = 'detail';
        const ACTION_CREATE = 'create';
        const ACTION_MASS_UPLOAD = 'mass-upload';

        const DRIVE_CONFIG_URL = 'https://docs.google.com/uc?id=';

        const URL_ADMIN_ALBUM = '/admin-site/album/';
        const URL_ADMIN_PHOTO = '/admin-site/photo/';

        const PATH_TO_UPLOAD_PRODUCT_IMAGE = '/upload';
    }
}
