<?php
    include 'includes/connection.php';

    $query = "SELECT * FROM users";

    $result = mysql_query($query);

    while($users = mysql_fetch_array($result)) {

        echo "<h3>" . $users['userName'] . "</h3>";
    }
?>