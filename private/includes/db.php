<?Php
define('DB_HOST', 'mariadb');
define('DB_USER', 'root');
define('DB_PASS', '4dy5qwtrsag#!sad');
define('DB_NAME', 'bakr');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection->connect_error) {
    die('failed to connect' . $connection->connect_error);
}

$sql = 'SELECT * FROM gebakken';
$select_all_gebakken = mysqli_query($connection, $sql);