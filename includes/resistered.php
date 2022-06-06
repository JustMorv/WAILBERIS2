<?php
    session_start();
    require_once "connect.php";

    $regFullName = $_POST["regFullName"];
    $regLoggin = $_POST["regLoggin"];
    $regEmaill = $_POST["regEmaill"];
    $regPassword = $_POST["regPassword"];
    $regPasswordAccept = $_POST["regPasswordAccept"];



    
    $error_fields = [];

    if($regFullName === ''){$error_fields[] = "regFullName";}

    if($regLoggin === ''){$error_fields[] = "regLoggin";}

    if($regEmaill === '' || !filter_var($regEmaill, FILTER_VALIDATE_EMAIL)){$error_fields[] = "regEmaill";}

    if($regPassword === ''){$error_fields[] = "regPassword";}
    if($regPasswordAccept === ''){$error_fields[] = "regPasswordAccept";}

    if(!$_FILES["regAvatar"]){$error_fields[] = "regAvatar";}


    if(!empty($error_fields)){

        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Заполните поля",
            "fields" => $error_fields,
        ];

        echo json_encode($response );
        die();
    }

    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `loggin` = '{$regLoggin}';");

    if(mysqli_num_rows($check_login) > 0){
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Такой Логин уже сушествует ",
            "fields" => ["regLoggin"],
        ];

        echo json_encode($response );
        die();
    }


        if ($regPassword === $regPasswordAccept){
            $path = "drop/" . time() .$_FILES["regAvatar"]["name"];
            
            if(!move_uploaded_file($_FILES["regAvatar"]["tmp_name"], "../" . $path)){

                $response = [
                    "status" => false,
                    "type" => 2,
                    "message" => "Ошибка при загрузке аватарке ",
                ];
                echo json_encode($response );

            }
    
            $regPassword = md5($regPassword);

            mysqli_query($connect, "INSERT INTO `users` (`id`,`full_name`, `loggin`, `email`, `password`, `avatar`) VALUES (NULL,'{$regFullName}', '{$regLoggin}', '{$regEmaill}', '{$regPassword}', '{$path}');");
            

            
            $response = [
                "status" => true,
                "message" => "Регистрация прошла успешна!",
            ];
            echo json_encode($response );

            // $_SESSION["message"] = "Регистрация прошла успешна!";
            // header("location: ../authorization.php");
    
        }else{
            // $_SESSION["message"] = "";
            // header("location: ../register.php");

                  
            $response = [
                "status" => false,
                "message" => "Пороли не совпадают",
            ];
            echo json_encode($response );
        }
    ?>
