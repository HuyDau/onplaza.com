<?php
    require_once("../config/config.php");

    $id = $_GET['id'];
    $delete = "DELETE FROM product WHERE id_product = $id";
    $query_delete = mysqli_query($conn, $delete);
    if(
        $query_delete
    ){
        echo "<script>window.alert('Xóa sản phẩm thành công!');window.location.href = 'product.php'</script>";
    }
    
?>