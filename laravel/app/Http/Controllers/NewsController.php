<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        return view('news/all', [
            'news' => News::$news
        ]);
    }

    public function newsOne($id)
    {
        $page404 = (array_key_exists($id, News::$news)) ? true : false;

        if ($page404) {
            return view('news/one', [
                'news' => News::$news[$id]
            ]);
        } else {
            return redirect(route('news/all'));
        }
    }

    public function categories()
    {
        return view('news/category/all', [
            'category' => News::$category
        ]);
    }

    public function categoryOne($id)
    {
        $news = [];

        foreach (News::$category as $item) {
            if ($item['name'] == $id) $id = $item['id'];
        }

        if (array_key_exists($id, News::$category)) {
            $name = News::$category[$id]['category'];

            foreach (News::$news as $item) {
                if ($item['category_id'] == $id) {
                    $news[] = $item;
                }
            }

            return view('news/category/one', [
                'news' => $news,
                'category' => $name
            ]);
        } else {
            return redirect(route('news.categories'));
        }


    }
}
