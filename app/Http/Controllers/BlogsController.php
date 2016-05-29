<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    /**
     * 新しい記事の登録
     *
     * @param $request
     * @return mixed
     *
     */
    public function postArticle(Request $request)
    {

//	  dd($request)
	//画像のアップロード
	$articleImgName = '';
	if($request->file('article_img') != null){
	    $articleImgName = ImagesController::uploadImage($request);
	}

        $article = new Article();

        $article->title = $request->title;
        $article->body = $request->body;
	$article->img_path = $articleImgName;

        $article->save();

        return redirect('/');
    }
    /**
     * get all article
     * 
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getAllArticles()
    {
        $articles = Article::all();
        
        return $articles;
    }
    /**
     * view article detail
     * 
     * @param $id
     * @return mixed
     */
    public function articleDetail($id)
    {
        $articleModel = new Article();
        
        $article = $articleModel->getSingleArticle($id);
        
        return view('article_detail', compact('article'));
    }
}
