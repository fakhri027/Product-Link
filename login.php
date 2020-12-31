<?php

$nik = filter_input (INPUT_POST, '');
if (!empty($nik)){
$host="localhost";
$dbnik="username";
$dbname="login";
$dbpassword="";

$conn =  new mysqli  ($host, $dbusernmae, $dbname, $dbpassword);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
    $sql = "SELECT account (usernmae)
    values ('$username')";
    if($conn->query($sql)){
        echo "Berhasil";
    }
    else{
        echo "Maaf, gagal".$sql."<br>".$conn->error;
    }
    $conn->close();
}
}
else{
    echo "username harus diisi";
    die();
}
?>