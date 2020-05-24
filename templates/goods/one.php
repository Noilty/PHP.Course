<?php
/**
 * @var array $data - массив с данными
 */
$item = $data['item'];
?>
<h1>One goods</h1>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://mfiles.alphacoders.com/401/401233.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><strong><?= $item['name'] ?></strong></h5>
                        <p class="card-text">{item description}</p>
                        <p class="card-text"><b>Price</b>: <?= $item['price'] ?></p>
                        <p class="card-text">
                            <small class="text-muted"><b>Created</b>: <?= date('d.m.yy H:i:s', $item['created_at']) ?></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h3>Комментарии: </h3>
    </div>
    <div class="col-12">
        {COMMENTS}
    </div>
    <div class="col-12">
        <form action="goods.php?action=createComment" method="post">
            <label for="comment-text">Комментарий</label>
            <input id="comment-text" name="text" type="text"/>
            <input type="hidden" name="image_id" value="<?=$item['id']?>">
            <input type="submit" class="btn-primary btn">
        </form>
    </div>
</div>