<?php




        try {
            
            $connection = new PDO("mysql:host=localhost:3307;dbname=products_store", "root", "test");
            $sql = "SELECT * FROM product_types";
            $stmt = $connection->prepare($sql);

            $stmt->execute();

            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //     var_dump($row);
            // }

            var_dump($rows);

        } catch(PDOException $exc) {
            echo $exc->getMessage();
        }



?>