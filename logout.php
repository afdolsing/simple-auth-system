<?php
    session_start();

    // set session menjadi kosong
    $_SESSION = [];
    session_unset();

    // hancurkan session
    session_destroy();

    // hapus cookie dengan cara mundur 1 jam yang lalu
    setcookie('id','', time() - 3600);
    setcookie('key','', time() - 3600);

    // redicect ke
    header("location: login.php");
    exit;
