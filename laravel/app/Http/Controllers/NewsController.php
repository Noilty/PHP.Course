<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsAll()
    {
        return view('news/all', [
            'news' => News::getNews()
        ]);
    }

    public function newsOne($id)
    {
        if (array_key_exists($id, News::getNews())) {
            return view('news/one', [
                'news' => News::getNews()[$id]
            ]);
        } else {
            return redirect(route('news.all'));
        }
    }

    public function newsCategories()
    {
        return view('news/category/all', [
            'categories' => News::getCategories()
        ]);
    }

    public function newsCategoriesId($id)
    {
        $news = [];

        foreach (News::getCategories() as $item) {
            if ($item['title_translit'] == $id) $id = $item['id'];
        }

        if (array_key_exists($id, News::getCategories())) {
            $name = News::getCategories()[$id]['title'];
            foreach (News::getNews() as $item) {
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
