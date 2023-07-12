<?php
    require_once("../config/config.php");
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    }

    $fileName = "Order" . ".xls"; 
    $fields = array('ID','NAME','PHONE NUMBER','EMAIL','CITY','DISTRICT', 'WARD', 'DETAIL ADDRESS', 'NOTE', 'TOTAL', 'TIME', 'PAYMENT', 'STATUS' );

    $excelData = implode("\t", array_values($fields)) . "\n";

    $query = mysqli_query($conn,"SELECT * FROM cart INNER JOIN paymentmethods ON paymentmethods.id_paymentmethods = cart.id_paymentmethods  INNER JOIN status ON cart.id_status = status.id_status"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            $lineData = array($row['id_cart'], $row['name_kh'], $row['sdt'],$row['gmail'], $row['city'], $row['district'], $row['ward'], $row['detail_address'], $row['note'], $row['total'], $row['time'], $row['name_paymentmethods'],$row['name_status']); 
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