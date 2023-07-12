<?php
    require_once("../config/config.php");

    $id = $_GET['id'];
    $delete = "DELETE FROM portfolio WHERE id_portfolio = $id";
    $query_deltete = mysqli_query($conn, $delete);
    if(
        $query_deltete
    ){
        echo "<script>window.alert('Xóa Danh Mục Sản Phẩm Thành Công!');window.location.href = 'portfolio.php'</script>";
    }
    
?>