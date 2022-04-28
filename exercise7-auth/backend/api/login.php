<?php

    require_once("../functions/login-func.php");

    $userData = json_decode(file_get_contents("php://input"), true);

    if ($userData && isset($userData["email"]) && isset($userData["password"])) {

        try {

            $user = login($userData);

            if ($user) {

                session_start();
                $_SESSION["user"] = $user;

                echo json_encode(["status" => "SUCCESS", "message" => "Входът е успешен!"]); 

            } else {
                http_response_code(400);
                echo json_encode(["status" => "ERROR", "message" => "Потребител с такъв имейл не е намерен!"]); 
            }

        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(["status" => "ERROR", "message" => $e->getMessage()]); 
        }

    } else {
        http_response_code(400);
        echo json_encode(["status" => "ERROR", "message" => "Некоректни данни!"]); 
    }

?>