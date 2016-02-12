<!DOCTYPE html>
<html>
<head>
    <?php
        include 'includes/connection.php';

        if($_POST['formSubmit'] == "Submit") {
            $varUserName = $_POST['userName'];
            $varPassword = $_POST['password'];
            $varFirstName = $_POST['firstName'];
            $varLastName = $_POST['lastName'];
        }
    if($_POST['formSubmit'] == "Submit") {
        $errorMessage = "";

        if(empty($_POST['userName'])) {
            $errorMessage .= "<li>You forgot to enter a username!</li>";
        }
        if(empty($_POST['password'])) {
            $errorMessage .= "<li>You forgot to enter a password!</li>";
        }
        if(empty($_POST['lastName'])) {
            $errorMessage .= "<li>You forgot to enter a first name!</li>";
        }
        if(empty($_POST['firstName'])) {
            $errorMessage .= "<li>You forgot to enter a last name!</li>";
        }

        $varUserName = $_POST['userName'];
        $varPassword = $_POST['password'];
        $varFirstName = $_POST['firstName'];
        $varLastName = $_POST['lastName'];

    }
    ?>
    <link rel="stylesheet" type="text/css" href="profile.css"/>
</head>
<body>

<ul>
    <li><p style="font-family:sans-serif ; font-size: 235%; margin: 8px; padding: 0px;"><b style="color:blueviolet">TOP</b><b>GAME</b></p></li>
    <li><a href="home.php">Home</a></li>
    <li><a href="products.php">Products</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="frequentlyAskedQuestions.php">FAQ</a></li>
    <li><a class="active" href="profile.php">Profile</a></li>
</ul>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <?php
        if(!empty($errorMessage))
        {
            echo("<p>There was an error with your form:</p>\n");
            echo("<p>" . $errorMessage . "</p>\n");
        }
    ?>
    <div id="navbar">
        <table>
            <tr>
                <td><a class="ul_icon_fix" href="shoppingCart.php"><img src="http://www.iconsplace.com/icons/preview/purple/shopping-basket-256.png" style="width: 25px; height: 25px;"></a></td>
            </tr>
        </table>
    </div>
    <div id="profile_signup_box">
        <div id="profile_topbox_login">
            <form action="signup.php" method="post">
                User Name: <input type="text" id="userName" name="userName" maxlength="50" value="<?=$varUserName?>"><br>
                Password: <input type="text" id="password" name="password" maxlength="50" value="<?=$varPassword?>"><br>
                First Name: <input type="text" id="firstName" name="firstName" maxlength="50" value="<?=$varFirstName?>"><br>
                Last Name: <input type="text" id="lastName" name="lastName" maxlength="50" value="<?=$varLastName?>"><br>
                <input type="submit" name="formSubmit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>

