<?php 
    $con = mysqli_connect('localhost', 'root', '', 'baza');

    $d = $_POST['data'];
    $i = $_POST['ilosc'];
    $t = $_POST['tel'];

    $q = "INSERT INTO rezerwacje VALUES (NULL, NULL, '$d', '$i', '$t');";
    $r = mysqli_query($con, $q);

    echo "Dodoano rezerwacje do bazy";

    mysqli_close($con);
?>