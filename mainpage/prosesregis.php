<?php
include("configgabung.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["daftar"])) {
    $regNumber = $_POST["reg_number"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $regNumber = pg_escape_string($conn_account, $regNumber);
    $username = pg_escape_string($conn_account, $username);

    $checkRegNumberQuery = "SELECT * FROM users WHERE reg_number='$regNumber'";
    $result = pg_query($conn_account, $checkRegNumberQuery);

    if ($result) {
        if (pg_num_rows($result) > 0) {
            header('Location: formregis.php?status=pernah');
            exit();

        }
    } else {
        die("Error checking registration number: " . pg_last_error($conn_account));
    }

    $sql = "INSERT INTO users (reg_number, username, password) 
    VALUES ('$regNumber', '$username', '$password')";
    $result = pg_query($conn_account, $sql);

    if ($result) {
        header('Location: indexakun.php?status=sukses');
        exit();
    } else {
        die("Error inserting user: " . pg_last_error($conn_account));
    }
}

pg_close($conn_account);
?>
