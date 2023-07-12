<?php
    require_once("../config/config.php");

    $id = $_GET['id'];
    $delete = "DELETE FROM categories WHERE id_category = $id";
    $query_deltete = mysqli_query($conn, $delete);
    if(
        $query_deltete
    ){
        echo "<script>window.alert('Xóa Danh Mục Thành Công!');window.location.href = 'category.php'</script>";
    }
    
?>