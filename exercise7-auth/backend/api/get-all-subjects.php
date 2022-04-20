<?php

    session_start();

    if (isset($_SESSION["user"])) {

        echo json_encode(["WEB Технологии"]);

    } else {
        http_response_code(401);
        echo json_encode(["message" => "Потребителят не е автентикиран"]);
    }


?>