<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ItemImgController extends Controller
{
    public $os = PHP_OS;

    public function get_img($img)
    {
        /** Change \ to / in linux */
        if( $this->os == 'WIN')
        {
            $path = storage_path('image') . '\\item' . $img . '.png';
            if (file_exists($path)) {
                $file = file_get_contents($path);
                return response($file, 200)->header('Content-Type', 'image/jpeg');
            }
            $path = storage_path('image') . '\\item' . 'notfound' . '.png';
            $file = file_get_contents($path);
            return response($file, 200)->header('Content-Type', 'image/jpeg');
        }else{
            /** / in linuxs */
            $path = storage_path('image') . '/item/' . $img . '.png';
            if (file_exists($path)) {
                $file = file_get_contents($path);
                return response($file, 200)->header('Content-Type', 'image/jpeg');
            }
            $path = storage_path('image') . '/item/' . 'bedrock' . '.png';
            $file = file_get_contents($path);
            //delete file doesnt exists
            //\DB::table('itemsdata')->where('name', $img)->delete();
            return response($file, 200)->header('Content-Type', 'image/jpeg');
        }

    }
}
