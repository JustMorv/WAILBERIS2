<?php

function connect(){
    $conn = mysqli_connect("localhost", "root", "", "dbWaildberis");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function init(){
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT  id, title FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}
function selectOneGoods(){
    $conn = connect();
    $id = $_POST["gid"];
    $sql = "SELECT  *  FROM products WHERE id ='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateGoods(){

    $conn = connect();
    $id = $_POST["id"];
    $title = $_POST["gtitle"];
    $price = $_POST["gprice"];
    $desk = $_POST["gdesk"];
    $img = $_POST["gimg"];



    $sql = "UPDATE products SET title = '{$title}',price = '{$price}', desk = '{$desk}',img = '{$img}' WHERE id ='{$id}'";


    if (mysqli_query($conn, $sql)) {

        echo"1";
    } else {
        echo  $id." id \n";
        echo   $title." title \n    ";
        echo  $price." price \n";
        echo  $desk." desk \n";
        echo  $img." img \n";
    } 

    mysqli_close($conn);
}

function newGoods(){
    
    $conn = connect();
    $title = $_POST["gtitle"];
    $price = $_POST["gprice"];
    $desk = $_POST["gdesk"];
    $img = $_POST["gimg"];

    $sql = "INSERT INTO `products` (`id_product`, `img`, `title`, `brend`, `price`, `category`, `desk`, `search`)
    VALUES ('', '$img', '$title', NULL, '$price', NULL, '$desk', NULL);";

    if (mysqli_query($conn, $sql)) {
        echo"1";
    } else {
        echo  "0";
    } 

    mysqli_close($conn);
}

function loadGoods(){
    $conn = connect();
    $sql = "SELECT  *  FROM products ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);


}