<?php
    require_once("../config/config.php");
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    }

    $fileName = "Product" . ".xls"; 
    $fields = array('ID','CODE','NAME PRODUCT','CATEGORY','PRICE','IMAGE','DES','DESCRIPTION');

    $excelData = implode("\t", array_values($fields)) . "\n";

    $query = mysqli_query($conn,"SELECT * FROM product ORDER BY id_product ASC"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            $lineData = array($row['id_product'], $row['ma_product'], $row['name_product'],$row['id_category'], $row['price'], $row['image_product'], $row['des1'], $row['description']); 
            array_walk($lineData, 'filterData'); 
            $excelData .= implode("\t", array_values($lineData)) . "\n"; 
        } 
    }else{ 
        $excelData .= 'No records found...'. "\n"; 
    } 
    header("Content-Type: application/vnd.ms-excel"); 
    header("Content-Disposition: attachment; filename=\"$fileName\""); 
    
    // Render excel data 
    echo $excelData; 
    
    exit;
?>