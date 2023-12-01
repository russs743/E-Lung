<?php
$host = "localhost";
$port = "5432"; // default PostgreSQL port
$dbname = "akun";
$user = "postgres";
$password = "Pbb245cz96";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
