<?php
include("configgabung.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $username = pg_escape_string($conn_account, $username);

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = pg_query($conn_account, $query);

    if ($result && $row = pg_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            header('Location: daftarbarang.php');
            exit();
        } else {
            header('Location: indexakun.php?status=passwordsalah');
            exit();
        }
    } else {
        header('Location: indexakun.php?status=usertakada');
        exit();
    }
}

pg_close($conn_account);
?>
