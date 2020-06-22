<?php
require_once '../engine/core.php';

/**
 * Все изображения
 */
function routeIndex()
{
    fillDataBase();
    $images = getItemArray('select name, view from gb.image order by view desc');

    echo render('gallery/all', ['images' => $images]);
}

/**
 * Одно изоброжение
 */
function routeOne()
{
    //xss
    $imageName = (string)htmlspecialchars(strip_tags($_GET['image']));
    $image = getItem('select * from gb.image where name="'.$imageName.'"');

    if (!empty($image)) {
        // Увеличить $image['view'] на +1 -> execute()
        $view = $image['view'];
        execute('update gb.image set view=' . ($view + 1) . ' where id=' . $image['id']);
        $image = getItem('select * from gb.image where name="' . $imageName . '"');
        $comments = getItemArray('select * from gb.image_comment where image_id=' . $image['id'] . ' order by created_at desc');

        echo render('gallery/one', ['image' => $image, 'comments' => $comments]);
    } else {
        echo render('site/error');
    }
}

function routeFill()
{
    fillDataBase();
    echo render('site/success');
}

/**
 * Загрузка изображений на сервер
 */
function routeDownload()
{
    if (!empty($_FILES)) {
        $file = $_FILES['file'];
        $name = $file['name'];
        $type = $file['type'];
        $size = $file['size'];

        if ($size > 5242880 || explode('/', $type)[0] !== 'image') {
            render('site/error');
            die();
        }
        if (loadImage($file['tmp_name'], $name)){
            header("Location: gallery.php");
            die();
        };

    }
    echo render('gallery/download');
}

/**
 * Создания комментария к фоточке
 */
function routeCreateComment()
{
    if (!empty($_POST)) {
        $post = $_POST;
        $image = getItem('select * from gb.image where id=' . $post['image_id']);

        if (!empty($image)) {
            // Сохранить комментарий
            $imageId = (int)$post['image_id'];
            $comment = $post['text'];
            $create_at = time();
            execute('insert into gb.image_comment 
                        (comment, created_at, image_id) value 
                        ("'.$comment.'", "'.$create_at.'", '.$imageId.')');
            header("Location: gallery.php?action=one&image=" . $image['name']);
            die();
        }
    }
    echo render('site/error');
}

/**
 * Страницы ошибки
 */
function routeError()
{
    echo render('site/error');
}

route();