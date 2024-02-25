<?php

include "../../inc/db.php";

if ($_POST) {
    if ($_GET) {
        $endPoint = $_GET["endPoint"];

        if ($endPoint == "register") {
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $gender = $_POST["gender"];
            $mail = $_POST["mail"];
            $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
            $country = $_POST["country"];
            $city = $_POST["city"];
            $address_line = $_POST["address_line"];
            $address_line_2 = $_POST["address_line_2"];

            $registerSql = "INSERT INTO `customers` (`first_name`, `last_name`, `gender`, `email`,`password`,`address_line1`, `address_line2`, `city`, `country`) VALUES (?,?,?,?,?,?,?,?,?)";
            $register = $db->prepare($registerSql);
            $register->execute([
                $firstName,
                $lastName,
                $gender,
                $mail,
                $pass,
                $address_line,
                $address_line_2,
                $city,
                $country
            ]);
            if($register){
                echo "ok";
            }
        }
        if($endPoint == "addDB"){
            $dbName = $_POST["dbName"];
            $user = $_POST["user_id"];
            $dbHost = $_POST["dbHost"];
            $dbUser = $_POST["dbUser"];
            $dbPass = $_POST["dbPass"];
            $dbType = $_POST["dbType"];
            $insertDbSQL = "INSERT INTO `db_list` (`user_id`, `db_name`, `db_host`, `db_user`, `db_pass`, `db_type`) VALUES (?, ?, ?, ?, ?, ?)";
            $insertDb = $db->prepare($insertDbSQL);
            $insertDb->execute([
                $user,
                $dbName,
                $dbHost,
                $dbUser,
                $dbPass,
                $dbType
            ]);
            if($insertDb){
                echo "ok";
            }else{
                echo "error";
            }
        }
        if($endPoint == "deleteDB"){
            $id = $_POST["id"];
            $deleteDBSQL = "delete from db_list where db_id = ?";
            $deleteDB = $db->prepare($deleteDBSQL);
            $deleteDB->execute([
                $id
            ]);
            if($deleteDB){
                echo "ok";
            }
        }
    }
}


?>