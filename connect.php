<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect error (' . mysqli_connect_error().')'
    . mysqli_connect_error())
}
else{
    $sql = "INSERT INTO accounts (username, password)
    values ('$username', '$password')";
    if($conn->query($sql)){
        echo "New record is inserted sucessfully";
    }
    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $cann->close();
}

if(!empty($username)){
    if(!empty($password)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "account";
    }
    else{
        echo "Password tidak boleh kosong";
        die();

    }
}
else{
    echo "username tidak boleh kosong";
}
?>