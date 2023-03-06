<?php
SESSION_START();
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <link rel="stylesheet" href="css/home.css">
    <title>Abby's Gems - Home</title>
</head>
<body>
<header>
    <nav>
    <ul>
    <li><a href="home.php" class="link">Home</a></li>
    <li><a href="shop.php" class="link">Shop</a></li>
    <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
        {
        ?>
        <?php }else{ ?>
        <?php } ?>
        <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
        {
        ?>
        <a href="cart.php" class="cart">Cart</a>
        <input type="button" value="Sign Out" id="signOutBtn" class="up">
        <?php }else{ ?>
        <!-- Sign In Button -->
        <span><a href="signin.html" class="in">Sign In</a></span>
        <!-- Sign Up Button -->
        <span><a href="signup.html" class="up">Sign Up</a></span>
        <?php } ?>
        </nav>
    </header>

<img class="main" src="Photos/main.png" alt="MainPhoto">

<div class="quiz">
<h1>Which necklace is best for your zodiac sign?<h1>
<a href="quiz.php">Find Out Here!</a>
</div>





<div id="af">
    <h2>Artist's Favorites</h2>
    <a href="products/ma.php"><img class="favs thumbnail" src="Photos/mossagate.jpg" alt="Moss Agate"></a>
    <a href="products/ms.php"><img class="favs thumbnail" src="Photos/moonstone.jpg" alt="Moonstone"></a>
    <a href="products/ga.php"><img class="favs thumbnail" src="Photos/aventurine.jpg" alt="Green Aventurine"></a>
    <a href="products/te.php"><img class="favs thumbnail" src="Photos/tigerseye.jpg" alt="Tigers Eye"></a>
</div>

<footer>
        <p><u>Useful Links</u></p>
        <ul>
        <li><a href="https://www.instagram.com/abb.y.s/" class="link" target="_blank" class="link">Personal Instagram</a></li><br>
        <li><a href="https://www.instagram.com/abbysgems11/" target="_blank" 
        class="link">Store Instagram</a></li><br>
        <li><a href="mailto:abbymariesargent@gmail.com" target="_blank" 
        class="link">Email</a></li><br>
        </ul>  
</footer>

<script type="text/javascript">
    var signOutBtn = document.getElementById("signOutBtn");
    
    signOutBtn.onclick = function() {
        fetch('signout.php')
        .then(function(){
            location.reload();
        });
    }

</script>

</body>
</html>