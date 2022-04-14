<?php

    $user = file_get_contents("php://input");

    echo json_encode(["message" => "Записът е успешен"])

?>