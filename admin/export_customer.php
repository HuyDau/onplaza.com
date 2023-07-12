<?php
    require_once("../config/config.php");
    function filterData(&$str){ 
        $str = preg_replace("/\t/", "\\t", $str); 
        $str = preg_replace("/\r?\n/", "\\n", $str); 
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
    }

    $fileName = "Customer" . ".xls"; 
    $fields = array('ID','USERNAME','PASSWORD','GMAIL','FULL NAME','PHONE NUMBER');

    $excelData = implode("\t", array_values($fields)) . "\n";

    $query = mysqli_query($conn,"SELECT * FROM users WHERE permission = 2"); 
    if($query->num_rows > 0){ 
        // Output each row of the data 
        while($row = $query->fetch_assoc()){ 
            $lineData = array($row['id'], $row['username'], $row['password'],$row['gmail'], $row['fullname'], $row['phone']); 
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