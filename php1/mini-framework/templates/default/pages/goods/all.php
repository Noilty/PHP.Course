<?php
/** @var array $data - массив товаров */
$items = $data['items'];
?>
<h1>All goods</h1>
<div class="row">
    <? foreach ($items as $item) { ?>
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://mfiles.alphacoders.com/401/401233.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="goods.php?action=one&item=<?= $item['id'] ?>"><strong><?= $item['name'] ?></strong></a></h5>
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
    <? } ?>
</div>

