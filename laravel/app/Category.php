<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Отключение полей по умолчанию
    public $timestamps = false;
    // https://laravel.ru/docs/v4/eloquent (Массовое заполнение)
    protected $fillable = [
        'title',
        'name'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
