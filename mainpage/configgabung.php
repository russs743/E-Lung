<?php
$host_account = "localhost";
$port_account = "5432";
$dbname_account = "akun";
$user_account = "postgres";
$password_account = "NamikZ743";

$conn_account = pg_connect("host=$host_account port=$port_account dbname=$dbname_account user=$user_account password=$password_account");

if (!$conn_account) {
    die("Connection failed: " . pg_last_error());
}

$host_missing = "localhost";
$port_missing = "5432";
$dbname_missing = "akun";
$user_missing = "postgres";
$password_missing = "NamikZ743";

$conn_missing = pg_connect("host=$host_missing port=$port_missing dbname=$dbname_missing user=$user_missing password=$password_missing");

if (!$conn_missing) {
    die("Connection failed: " . pg_last_error());
}
?>
