<?php
SESSION_START();
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="css/shop.css">
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

<div id="photos">
    <a href="products/ma.php"><img class="thumbnail" src="Photos/mossagate.jpg" alt="Moss Agate"></a>
    <a href="products/ms.php"><img class="thumbnail" src="Photos/moonstone.jpg" alt="Moonstone"></a>
    <a href="products/te.php"><img class="thumbnail" src="Photos/tigerseye.jpg" alt="Tigers Eye"></a>
    <a href="products/bt.php"><img class="thumbnail" src="Photos/black.jpg" alt="Black Tourmaline"></a>
    <a href="products/ct.php"><img class="thumbnail" src="Photos/citrine.jpg" alt="Citrine"></a>

    <a href="products/rc.php"><img class="thumbnail" src="Photos/citrine2.jpg" alt="Raw Citrine"></a>
    <a href="products/rq.php"><img class="thumbnail" src="Photos/rosequartz.jpg" alt="Rose Quartz"></a>
    <a href="products/cq.php"><img class="thumbnail" src="Photos/clearquartz.jpg" alt="Clear Quartz"></a>
    <a href="products/yc.php"><img class="thumbnail" src="Photos/yellowcalcite.jpg" alt="Yellow Calcite"></a>
    <a href="products/redc.php"><img class="thumbnail" src="Photos/redcalcite2.jpg" alt="Red Calcite"></a>
    
    <a href="products/ga.php"><img class="thumbnail" src="Photos/aventurine.jpg" alt="Green Aventurine"></a>
    <a href="products/bo.php"><img class="thumbnail" src="Photos/obsidian.jpg" alt="Black Obsidian"></a>
    <a href="products/gt.php"><img class="thumbnail" src="Photos/greentigerseye.jpg" alt="Green Tigers Eye"></a>
    <a href="products/am.php"><img class="thumbnail" src="Photos/amethyst.jpg" alt="Amethyst"></a>
    <a href="products/tq.php"><img class="thumbnail" src="Photos/turquoise.jpg" alt="Turquoise"></a>
</div>

    <footer>
        <p><u>Useful Links</u></p>
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