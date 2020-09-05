<?php

namespace App;

use App\Rules\Jedi;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 *
 * @property string title
 * @property string text
 * @property string image
 * @property boolean isPrivate
 */
class News extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'text',
        'isPrivate',
        'category_id' // Не изменялась категория (теперь гуд)
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->first();
    }

    public static function rules()
    {
        $tableCategory = (new Category())->getTable();

        return [
            'title' => ['required','min:5','max:30', new Jedi()],
            'text' => 'required|max:1000',
            'category_id' => "required|exists:{$tableCategory},id",
            'image' => 'mimes:jpeg,bmp,png|max:1000'
        ];
    }

    public static function attributeNames()
    {
        return [
            'title' => 'Заголовок новости',
            'text' => 'Текст новости',
            'category_id' => 'Категория новости',
            'image' => 'Изображение'
        ];
    }
}
