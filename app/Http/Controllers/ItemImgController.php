<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ItemImgController extends Controller
{
    public $os = PHP_OS;

    public function get_img($name)
    {
        $path = storage_path("image/item/$name.png");
        if (!file_exists($path)) {
            $path = storage_path("image/item/stone.png");
            $img = \Image::make($path)->resize(300, 300);
            return $img->response('jpg');
        }
        $img = \Image::make($path)->resize(300, 300);
        return $img->response('jpg');
    }
}
