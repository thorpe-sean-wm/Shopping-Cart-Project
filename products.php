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
    <link rel="stylesheet" type="text/css" href="products.css"/>
</head>
<body>
<ul>
    <li><p style="font-family:sans-serif ;font-size: 235%; margin: 8px; padding: 0px;"><b style="color:blueviolet">TOP</b><b>GAME</b></p></li>
    <li><a href="home.php">Home</a></li>
    <li><a class="active" href="products.php">Products</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="frequentlyAskedQuestions.php">FAQ</a></li>
    <li><a href="profile.php">Profile</a></li>
</ul>
<div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <div id="page">
        <div id="navbar">
            <table>
                <tr>
                    <td><a class="ul_icon_fix" href="shoppingCart.php"><img src="http://www.iconsplace.com/icons/preview/purple/shopping-basket-256.png" style="width: 25px; height: 25px;"></a></td>
                </tr>
            </table>
        </div>
        <div id="body">
            <table id="productTable">
                <tr id="productRow1" class="productRow">
                    <td id="product1" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/8811/VersaH35_02-kb.png" style="height: 350px;width: 350px;"/>
                        <p class="computer_whole">Super Bowl Intel Z97 Special</p>
                        <a href="productOne.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product2" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/8592/Chimera5_White-1-Main-kb.png" style="height: 350px;width: 350px;"/>
                        <p class="computer_whole">Intel X99 Core i7 Configurator</p>
                        <a href="productTwo.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product3" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/9226/NinjaII_01_600-n.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">Super Bowl Intel Z170 I7</p>
                        <a href="productThree.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                </tr>
                <tr id="productRow2" class="productRow">
                    <td id="product4" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/9339/Revolt2_01_600.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">Revolt 2 Pro</p>
                        <a href="productFour.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product5" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/6917/A21-1-kb-bg.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">Gamer Fire 500</p>
                        <a href="productFive.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product6" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/6320/Azza-Atlas-1-kb.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">Special-C</p>
                        <a href="productSix.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                </tr>
                <tr id="productRow3" class="productRow">
                    <td id="product7" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/7276/seiran-1-kbm.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">Gamer Mage D245</p>
                        <a href="productSeven.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product8" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/8574/Chimera5-main-kb.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">AMD FX 8-Core Configurator</p>
                        <a href="productEight.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                    <td id="product9" class="product">
                        <img src="http://content.ibuypower.com/Images/Components/6541/Horus_Main_kb_600x600.png" style="height: 350px; width: 350px;"/>
                        <p class="computer_whole">AMD FX 4-Core Configurator</p>
                        <a href="productNine.php">
                            <img src="https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519629-129_ArrowRight-512.png" style="width:30px; height:30px;"/>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>

