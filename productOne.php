<!DOCTYPE html>
<html>
<head>
    <?php
    /*** mysql hostname ***/
    $hostname = 'localhost';

    /*** mysql username ***/
    $username = 'root';

    /*** mysql password ***/
    $password = 'root';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=ubuntu", $username, $password);
        /*** echo a message saying we have connected ***/
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    ?>
    <link rel="stylesheet" type="text/css" href="productSpecific.css"/>
</head>
<body>
<div id="header">
    <a href="products.php">
        <img src="https://cdn0.iconfinder.com/data/icons/typicons-2/24/arrow-back-outline-128.png" style="width: 35px; height: 35px"/>
    </a>
    <div id="header_logo">
        <p style="text-align: center; font-family: sans-serif; margin: 8px; padding: 0;"><b style="color:blueviolet">TOP</b><b>GAME</b></p>
    </div>
</div>
<div id="main">
    <div id="product_div">
        <div id="product_pic">
            <img class="product_pic_css" src="http://content.ibuypower.com/Images/Components/8811/VersaH35_02-kb.png"/>
        </div>
        <div id="product_info_">

        </div>
    </div>
</div>
</body>
</html>