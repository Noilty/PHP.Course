<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsAll()
    {
        return view('news/all', [
            'news' => News::$news
        ]);
    }

    public function newsOne($id)
    {
        if (array_key_exists($id, News::$news)) {
            return view('news/one', [
                'news' => News::$news[$id]
            ]);
        } else {
            return redirect(route('newsAll'));
        }
    }

    public function newsCategories()
    {
        return view('news/category');
    }
}
