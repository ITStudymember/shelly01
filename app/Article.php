<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
	/**
     * 全記事の取得
     * 
     * @param $id
     * @return mixed
     */
    public function getSingleArticle($id)
    {
        return Article::find($id);
    }
}
