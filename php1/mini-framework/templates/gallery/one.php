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
<div class="row">
    <h3>Комментарии: </h3>
</div>
<div class="row">
    <? foreach ($comments as $comment) { ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert" style="width: 100%;">
            <strong><?= date('d.m.yy H:i:s', $comment['created_at']) ?></strong>
            <div><?= $comment['comment'] ?></div>
            <!--div class="comment-gallery-edit" id="comment-id<?= $comment['id'] ?>">Edit message</div-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 24px;">
                <span aria-hidden="true">&#128465;</span>
            </button>
        </div>
    <? } ?>
</div>
<form action="gallery.php?action=createComment" method="post">
    <label for="comment-text">Комментарий</label>
    <input id="comment-text" name="text" type="text"/>
    <input type="hidden" name="image_id" value="<?=$image['id']?>">
    <input type="submit" class="btn-primary btn">
</form>