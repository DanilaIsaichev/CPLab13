<?php
    header('Content-Type: application/json');

    function add_message() {
        $msg = htmlentities($_POST['message']);
        $msg = !empty($msg) ? $msg : 'Пустое сообщение';

        $f = fopen('log.txt', 'a');
        fwrite($f, $msg);
        fwrite($f, "\n");
        fclose($f);

        echo json_encode(array('status' => 'success'));
    }
    
    function list_messages() {
        $f = fopen('log.txt', 'r');
        if (!$f) {
            echo 'Ошибка чтения файла.';
            return;
        }
        $messages = [];
        while (($line = fgets($f)) != false) {
            array_push($messages, $line);
        }
        echo json_encode($messages);
        fclose($f);
    }

    if ($_GET['action'] == 'add') add_message();
    else if ($_GET['action'] == 'list') list_messages();
?>