<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <link rel="stylesheet" href="css/quiz.css">
    <title>Abby's Gems - Quiz</title>
</head>
<body>
<header>
    <a href="home.php" class="home">Back to Home Page</a>
</header>


<div id="aries" class="answers">
    <h1>You're an Aries!</h1>
    <p>The necklace that's perfect for your zodiac sign is Citrine.
    <a href="products/ct.php"><img src="Photos/citrine.jpg"></a>
</div>
<div id="tau" class="answers">
    <h1>You're an Taurus!</h1>
    <p>The necklace that's perfect for your zodiac sign is Moss Agate.
    <a href="products/ma.php"><img src="Photos/mossagate.jpg"></a>
</div>
<div id="gem" class="answers">
    <h1>You're an Gemini!</h1>
    <p>The necklace that's perfect for your zodiac sign is Tigers Eye.
    <a href="products/te.php"><img src="Photos/tigerseye.jpg"></a>
</div>
<div id="can" class="answers">
    <h1>You're an Cancer!</h1>
    <p>The necklace that's perfect for your zodiac sign is Red Calcite.
    <a href="products/rc.php"><img src="Photos/redcalcite.jpg"></a>
</div>
<div id="leo" class="answers">
    <h1>You're an Leo!</h1>
    <p>The necklace that's perfect for your zodiac sign is Rose Quartz.
    <a href="products/rq.php"><img src="Photos/rosequartz.jpg"></a>
</div>
<div id="vir" class="answers">
    <h1>You're an Virgo!</h1>
    <p>The necklace that's perfect for your zodiac sign is Obsidian.
    <a href="products/bo.php"><img src="Photos/obsidian.jpg"></a>
</div>
<div id="lib" class="answers">
    <h1>You're an Libra!</h1>
    <p>The necklace that's perfect for your zodiac sign is Tigers Eye.
    <a href="products/gt.php"><img src="Photos/greentigerseye.jpg"></a>
</div>
<div id="scorp" class="answers">
    <h1>You're an Scorpio!</h1>
    <p>The necklace that's perfect for your zodiac sign is Amethyst.
    <a href="products/am.php"><img src="Photos/amethyst.jpg"></a>
</div>
<div id="sag" class="answers">
    <h1>You're an Sagittarius!</h1>
    <p>The necklace that's perfect for your zodiac sign is Clear Quartz.
    <a href="products/cq.php"><img src="Photos/clearquartz.jpg"></a>
</div>
<div id="cap" class="answers">
    <h1>You're an Capricorn!</h1>
    <p>The necklace that's perfect for your zodiac sign is Rose Quartz.
    <a href="products/rq.php"><img src="Photos/rosequartz.jpg"></a>
</div>
<div id="aqu" class="answers">
    <h1>You're an Aquarius!</h1>
    <p>The necklace that's perfect for your zodiac sign is Amethyst.
    <a href="products/am.php"><img src="Photos/amethyst.jpg"></a>
</div>
<div id="pis" class="answers">
    <h1>You're an Pisces!</h1>
    <p>The necklace that's perfect for your zodiac sign is Clear Quartz.
    <a href="products/cq.php"><img src="Photos/clearquartz.jpg"></a>
</div>

<div id="quiz">
<h2>When's your birthday?</h2>
<button onclick="aries()" type="button" class="btn">March 21st - April 19th</button>
<button onclick="tau()" type="button" class="btn">April 20th - May 20th</button>
<button onclick="gem()" type="button" class="btn">May 21st - June 20th</button>
<button onclick="can()" type="button" class="btn">June 21st - July 22nd</button>
<button onclick="leo()" type="button" class="btn">July 23rd - Aug 22nd</button>
<button onclick="vir()" type="button" class="btn">Aug 23rd - Sept 22nd</button>
<button onclick="lib()" type="button" class="btn">Sept 23rd - Oct 22nd</button>
<button onclick="scorp()" type="button" class="btn">Oct 23rd - Nov 21st</button>
<button onclick="sag()" type="button" class="btn">Nov 22nd - Dec 21st</button>
<button onclick="cap()" type="button" class="btn">Dec 22nd - Jan 19th</button>
<button onclick="aqu()" type="button" class="btn">Jan 20th - Feb 18th</button>
<button onclick="pis()" type="button" class="btn">Feb 19th - March 20th</button>
</div>


<script type="text/javascript">
    function aries() {
                var x = document.getElementById("aries");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
                }

    function tau() {
    var x = document.getElementById("tau");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function gem() {
    var x = document.getElementById("gem");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function can() {
    var x = document.getElementById("can");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function leo() {
    var x = document.getElementById("leo");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function vir() {
    var x = document.getElementById("vir");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function lib() {
    var x = document.getElementById("lib");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function scorp() {
    var x = document.getElementById("scorp");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function sag() {
    var x = document.getElementById("sag");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function cap() {
    var x = document.getElementById("cap");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function aqu() {
    var x = document.getElementById("aqu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

    function pis() {
    var x = document.getElementById("pis");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    }

</script>

</body>
<footer>
</footer>
</html>