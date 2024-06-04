<?php
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "123456";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Không thể kết nối đến PostgreSQL.";
} else {
    echo "Kết nối đến PostgreSQL thành công!";
}
?>
