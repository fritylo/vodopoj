<?php
            //require './db_info/lucifer.php';
            require 'C:\Users\Acer\Downloads\OpenServer\domains\vodopoj.loc\back\form\db_info\lucifer.php';
            $account = htmlspecialchars($_POST['account']);
            $mysql = new mysqli($db_host, $db_user, $db_pass, $db_db);
            $return = $mysql->query("UPDATE `vpj_event` SET `event_id_eventtype` = 2 WHERE $account = {$_COOKIE['account']} AND '$account' = 'event_id_people' ");
            $return1 = $mysql->query("UPDATE `vpj_order` SET `order_id_state` = 2 WHERE $account = {$_COOKIE['account']} AND '$account' = 'order_id_people' ");
            $mysql->close();
?>