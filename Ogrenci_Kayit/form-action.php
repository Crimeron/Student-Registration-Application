<?php
    $name = $_POST["isim"];
    $surname = $_POST["soyisim"];
    $userno = $_POST["user_no"];
    $class = $_POST["sinif"];

    $host = "localhost";
    $dbname = "ogrenci_kayit";
    $username = "root";
    $password = "";

    $connection = new mysqli($host, $username, $password, $dbname);

    if(mysqli_connect_errno()){
        die("Connection Error: ". mysqli_connect_error());
    }

    $sql = "INSERT INTO Ogrenciler (isim, soyisim, user_no, sinif)
    VALUES ('$name', '$surname', $userno, $class)";
    if ($connection->query($sql) === TRUE) {
        
    } else {
      
    }

                    
?>