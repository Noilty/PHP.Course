<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        [
            'id' => 1,
            'title' => 'title news 1',
            'text' => 'text news 1',
        ],
        [
            'id' => 2,
            'title' => 'title news 2',
            'text' => 'text news 2',
        ]
    ];

    public function news()
    {
        $html = <<<php1
<h2>News</h2>
php1;
        foreach ($this->news as $news) {
            $html .= <<<php2
<a href="/news/{$news['id']}">{$news['title']}</a><br />
php2;
        }

        return $html;
    }

    public function newsOne($id)
    {
        $html = <<<php1
<h1>Menu</h1>
php1;

        $news = $this->getNewsId($id);

        if (!empty($id)) {
            $html .= <<<php1
<h1>{$news['title']}</h1>
<p>{$news['text']}</p>
php1;

            return $html;
        }

        return redirect(route('news'));
    }

    private function getNewsId($id)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
    }
}
