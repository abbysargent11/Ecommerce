<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="../css/price.css">
    <title>Abby's Gems</title>
</head>
<body>

<style>
body {
  background-image: url('../Photos/background.png');
}
</style>

    <header>
        <nav>
            <ul>
                <li><a href="../home.php" class="link">Home</a></li>
                <li><a href="../shop.php" class="link">Shop</a></li>
            </ul>
        </nav>
    </header>

<div id="photoDiv">
<?php
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = "capstone";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT photo FROM products WHERE name='Citrine'";
            $result = $conn->query($sql);

            echo "<img src='../Photos/citrine.jpg".$row['image']."'>";

            $conn->close();
?>

</div>

<div id="description">

    <h1>Golden Hand-Wrapped Tumbled Citrine</h1>
    <p>Can provide health, wealth, and happiness. Can attract abundance in all aspects of life. Great for manifestation and pursuing goals.</p>
    <p class="price">$25</p>
    <button onclick="myFunction()" class="button">Purchase</button>
    <form id="form" method="post" action="../addpurchase.php">
        <input class="boxes" type="text" name="name" value="Citrine">
        <input class="boxes" type="email" name="email" placeholder="Email Address">
        <input class="boxes" type="street" name="street" placeholder="Street">
        <input class="boxes" type="city" name="city" placeholder="City">
        <input class="boxes" type="state" name="state" placeholder="State">
        <input class="boxes" type="zip" name="zip" placeholder="Zip">

        <input class="button2" type="submit" value="Submit">
    </form>
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
        function myFunction() {
                var x = document.getElementById("form");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }
    </script>

</body>
</html>