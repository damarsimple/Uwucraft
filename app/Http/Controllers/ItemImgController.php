<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ItemImgController extends Controller
{
    public $os = PHP_OS;

    public function get_img($name)
    {
        if (!file_exists(public_path("img/item/$name.png"))) {
            return redirect("/img/item/stone.png");
        }
        return redirect("/img/item/$name.png");
    }
}
