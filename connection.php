<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $db = 'ubuntu';

    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
    mysql_select_db($db);
?>