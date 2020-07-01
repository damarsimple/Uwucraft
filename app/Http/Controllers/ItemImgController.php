<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemImgController extends Controller
{
    public function get_img($img)
    {
        /** Change \ to / in linux */
        $path = storage_path('avatar') . '\\' . $img . '.png';
        if (file_exists($path)) {
            $file = file_get_contents($path);
            return response($file, 200)->header('Content-Type', 'image/jpeg');
        }
        $path = storage_path('avatar') . '\\' . 'notfound' . '.png';
        $file = file_get_contents($path);
        return response($file, 200)->header('Content-Type', 'image/jpeg');
    }
}
