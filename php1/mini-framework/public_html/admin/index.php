<?php
require '../../engine/core.php';

function routeIndex()
{
    onlyAdmin(); //Только для админа

    echo render('admin/main', [], true, 'admin');
}

route();
