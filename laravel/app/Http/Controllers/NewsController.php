<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'News text 1'
        ],
        2 => [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'News text 2'
        ]
    ];

    public function news()
    {
        $html = <<<php
<h1>News</h1>
php;
foreach ($this->news as $news) {
    $html .= <<<php
<a href="/news/{$news['id']}">{$news['title']}</a><br>
php;

}
        return $html;
    }

    public function newsOne($nId)
    {
        $html = <<<php
<h1>News $nId</h1>
php;
        $news = $this->getNewsId($nId);

        if (!empty($news)) {
            $html .= $news['text'];
            return $html;
        } else {
            return redirect(route('news'));
        }
    }

    private function getNewsId($nId)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $nId) {
                return $news;
            }
        }
    }
}
