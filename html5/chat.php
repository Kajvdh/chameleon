<?php
    $redirect = 'https://chameleon.chattersworld.nl/html5.php?id=' . $_GET['id'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
?>