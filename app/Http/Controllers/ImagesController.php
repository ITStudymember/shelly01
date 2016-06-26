<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagesController extends Controller
{
    /**
     * 画像のアップロード
     *
     * @param Request $request
     * @return $fileName
     */
    public static function uploadImage(Request $request)
    {
        $imageFile = $request->file('article_img');
        
        list($width, $height, $image_type) = getimagesize($imageFile);

        //拡張子の判定
        switch($image_type){
            case IMAGETYPE_JPEG:$img_extension = "jpg";
                break;
            case IMAGETYPE_PNG:$img_extension = "png";
                break;
            case IMAGETYPE_GIF:$img_extension = "gif";
                break;
        }

        //画像ファイルに名前をつけて移動
        $fileName = md5(sha1(uniqid(mt_rand(), true))) . '.' . $img_extension;
        $imageFile->move('ArticleImages', $fileName);
    
        return $fileName;
    }
}
