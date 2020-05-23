<?php
/** @var array $data - массив картинок */
$images = $data['images'];
?>
<h1>Gallery</h1>
<p><a href="gallery.php?action=download" class="btn btn-success">Загрузить</a>
<div class="row">
<? foreach ($images as $image) { ?>
    <div class="col-6">
        Просмотры: <?= (!empty($image['view'])) ? $image['view'] : 0 ?><br />
        <a data-fancybox="gallery" href="<?= $config['imagesUrl'] . '/' . $image['name'] ?>">
            <img width="150px" src="<?= $config['imagesUrl'] . '/' . $image['name'] ?> ">
        </a>
        <a href="gallery.php?action=one&image=<?= $image['name'] ?>">gallery.php?action=one&image=<?= $image['name'] ?></a>
    </div>
<? } ?>
</div>
