<?php
/** @var array $orderItems */
?>
<h1>Корзина</h1>
<? if (count($orderItems) > 0) { ?>
    <ul class="list-group my-5">
        <? foreach ($orderItems as $item) { ?>
            <li class="list-group-item">
                <?= $item['name'] ?> (количество: <?= $item['quantity'] ?>)
                <a href="/shop/product.php?id=<?= $item['id'] ?>">Посмотреть</a>
            </li>
        <? } ?>
    </ul>
    <? if (isLoggedUser()) { ?>
        <a href="/shop/cart.php?action=order" class="btn btn-success">Оформить заказ</a>
    <? } else { ?>
        <button disabled class="btn btn-success">Оформить заказ (только для зарегистрированных пользователей)</button>
    <? } ?>
<? } else { ?>
    <div class="my-5">
        <em>в корзине пока ничего нет</em>
    </div>
<? } ?>