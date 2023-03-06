<?php
SESSION_START();
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="css/cart.css">
    <title>Abby's Gems - Shop</title>
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


    
    <div class="purchases">
    <?php include "getPurchases.php"; ?>
    </div>

    <footer>
        <u>Useful Links</u>
        <ul>
        <li><a href="https://www.instagram.com/abb.y.s/" target="_blank" 
        class="link">Personal Instagram</a></li><br>
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