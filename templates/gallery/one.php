<?php
/**
 * @var array $data - массив с данными
 */
$image = $data['image'];
$comments = $data['comments'];
?>
<h1>Gallery</h1>
<div class="row">
    <a class="btn btn-primary" href="/gallery.php">Назад в галерею</a>
</div>
<div class="row">
    Просмотры: <?= $image['view'] ?>
    <img src="<?= $image['path'] . '/' . $image['name'] ?>" alt="<?= $image['name'] ?>" style="margin-top: 20px">
</div>
<div style="padding: 20px 0;">
    <h3>Комментарии: </h3>
    <? foreach ($comments as $comment) { ?>
        <div style="background-color: lightgray; padding: 10px;">
            <strong><?= date('d.m.yy H:i:s', $comment['created_at']) ?></strong><br /><?= $comment['comment'] ?>
        </div>
    <? } ?>
</div>
<form action="gallery.php?action=createComment" method="post">
    <label for="comment-text">Комментарий</label>
    <input id="comment-text" name="text" type="text"/>
    <input type="hidden" name="image_id" value="<?=$image['id']?>">
    <input type="submit" class="btn-primary btn">
</form>