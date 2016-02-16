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
    <link rel="stylesheet" type="text/css" href="contact.css"/>
</head>
<body>

<ul>
    <li><p style="font-family:sans-serif ; font-size: 235%; margin: 8px; padding: 0px;"><b style="color:blueviolet">TOP</b><b>GAME</b></p></li>
    <li><a href="home.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a class="active" href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="frequentlyAskedQuestions.php">FAQ</a></li>
    <li><a href="profile.php">Profile</a></li>
</ul>
<div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <div id="navbar">
        <table>
            <tr>
                <td><a class="ul_icon_fix" href="shoppingCart.php"><img src="http://www.iconsplace.com/icons/preview/purple/shopping-basket-256.png" style="width: 25px; height: 25px;"></a></td>
            </tr>
        </table>
    </div>
    <div id="contactOne">
        <h2>Main Office</h2>
        p: 408-216-9087
    </div>
    <div id="contactTwo">

    </div>
</div>
</body>
</html>

