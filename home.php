<!DOCTYPE html>
<html>
<head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ubuntu";

    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed" . $conn->connect_error);
        }
    ?>
    <link rel="stylesheet" type="text/css" href="home.css"/>
</head>
<body>

<ul>
    <li><p style="font-family:sans-serif ; font-size: 235%; margin: 8px; padding: 0px;"><b style="color:blueviolet">TOP</b><b>GAME</b></p></li>
    <li><a class="active" href="home.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="contact.php">Contact</a></li>
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
    <div class="home_primary" id="home_headSection">
        <p style="font-size: 200%; margin: 0px; padding: 10px;">Welcome To</p>
        <p style="font-size: 500%; margin: 0px; padding: 0px;"><b style="color:blueviolet">TOP</b><b>GAME</b></p>
    </div>
    <div>
        <img src="http://www.digitalstormonline.com/img/gaming-desktops.jpg" style="width: 100%; height: 600px"/>
    </div>
</div>
</body>
</html>

