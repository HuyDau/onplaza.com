<?php
    require_once("../config/config.php");
    $id = $_GET['id'];
    $update = "UPDATE `cart` SET `id_status`='2' WHERE id_cart = $id";
    $query_update = mysqli_query($conn, $update);
    if($query_update){
        echo 
        "
            <script>
                window.alert('Order status update successful !');
                window.location.href = 'order.php';
            </script>
        ";
    }
?>