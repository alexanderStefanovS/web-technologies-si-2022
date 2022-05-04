<?php

    require_once('../functions/login-func.php');

    session_start();

    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        
        $user = login(['email' => $_COOKIE['email'], 'password' => $_COOKIE['password']]);

        if ($user) {
            $_SESSION['user'] = $user;
        }
    }

    if (isset($_SESSION["user"])) {

        echo json_encode(["WEB Технологии"]);

    } else {
        http_response_code(401);
        echo json_encode(["message" => "Потребителят не е автентикиран"]);
    }


?>