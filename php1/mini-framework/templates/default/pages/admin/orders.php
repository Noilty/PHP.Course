<?php
/** @var array $orders */
?>
<h1>Заказы</h1>
<table class="table">
    <tr>
        <th>Номер</th>
        <th>Дата заказа</th>
        <th>Статус</th>
        <th>Клиент</th>
        <th>Действия</th>
    </tr>
    <? foreach ($orders as $order) { ?>
        <tr id="order-<?= $order['id'] ?>">
            <td><?= $order['id'] ?></td>
            <td><?= $order['created_at'] ?></td>
            <td class="field-status"><?= ($order['status'] == ORDER_STATUS_NEW) ? 'В обработке' : 'Проведен' ?></td>
            <td><a href="/admin/users.php?action=view&id=<?=$order['user']['id']?>"><?=$order['user']['login']?></a></td>
            <td>
                <? if ($order['status'] == ORDER_STATUS_NEW) { ?>
                    <button class="btn btn-success btn_process" data-id="<?= $order['id'] ?>">Провести</button>
                <? } ?>
                <button class="btn btn-danger btn_remove" data-id="<?= $order['id'] ?>">Удалить</button>
            </td>
        </tr>
    <? } ?>
</table>

<script defer src="/js/service.orders.js"></script>