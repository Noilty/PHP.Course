<?php
require '../../engine/core.php';

function routeIndex() {
    onlyAuth(); // Для авторизированных пользователей

    $uid = $_SESSION['auth']['id'];
    $orders = getItemArray("select * from `order` where `user_id`={$uid}");

    echo render(
        'shop/orders',
        ['orders' => $orders,]
    );
}

route();