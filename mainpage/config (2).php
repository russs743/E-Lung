<?php
$db=pg_connect('host=localhost dbname=elung user=postgres password=10293847');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
