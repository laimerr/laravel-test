<?php
$name= $_POST['name'] ;
$address= $_POST['address'] ;
$education= $_POST['education'] ;
$work= $_POST['work'] ;
$experience= $_POST['experience'] ;

if(!empty($name) || !empty($address) || !empty($education) || !empty($work) || !empty($experience)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "jobharvest";

    $connect = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    $query = "INSERT INTO 'cv*'('name','address','education','work','experience') VALUES ('$name','$address','$education','$work','$experience')";

    $result = mysqli_query($connect,$query);
    
    if($result)
    {
        echo 'Data inserted';
    }else{
        echo 'Data not inserted';
        
    }


  
    mysqli_close($connect);
}

?>