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
            return redirect(route('news.all'));
        }
    }

    public function newsCategories()
    {
        return view('news/category/all', [
            'categories' => News::$category
        ]);
    }

    public function newsCategoriesId($id)
    {
        $news = [];

        foreach (News::$category as $item) {
            if ($item['title_translit'] == $id) $id = $item['id'];
        }

        if (array_key_exists($id, News::$category)) {
            $name = News::$category[$id]['title'];
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
