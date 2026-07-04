<?php

$host="127.0.0.1";

$user="root";

$password="";

$database="tapak_suci_unimus";

$conn=mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$conn){

    die("Koneksi gagal : ".mysqli_connect_error());

}

date_default_timezone_set("Asia/Jakarta");

?>