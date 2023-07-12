<?php
    require_once("../config/config.php");

    $id = $_GET['id'];
    $delete = "DELETE FROM user WHERE id = $id";
    $query_deltete = mysqli_query($conn, $delete);
    if(
        $query_deltete
    ){
        echo "<script>window.alert('Delete customer information successfully!');window.location.href = 'customer.php'</script>";
    }
    
?>