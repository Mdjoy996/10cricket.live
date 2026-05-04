<?php
session_start();
include "config.php";

$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$balance = 0;
$exposure = 0;

if($user){
$res = $conn->query("SELECT * FROM users WHERE username='$user'");
if($res->num_rows==1){
$data = $res->fetch_assoc();
$balance = $data['balance'];
$exposure = $data['exposure'];
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>10Cricket</title>

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
background:#000;
font-family:Arial;
color:#fff;
padding-bottom:120px;
}

/* HEADER */
header{
display:flex;
justify-content:space-between;
align-items:center;
padding:10px;
background:linear-gradient(90deg,#001a00,#00aa00,#001a00);
}

.logo img{height:55px}

.btns a{
padding:8px 12px;
margin-left:6px;
border-radius:8px;
text-decoration:none;
font-weight:bold;
font-size:14px;
}
.login{background:#9cff00;color:#000}
.logout{background:red;color:#fff}

.wrap{padding:6px}

/* SLIDER */
.slider{
margin-bottom:10px;
border-radius:14px;
overflow:hidden;
border:2px solid #66ff00;
}

.slider img{
width:100%;
height:140px;
object-fit:cover;
}

/* BANNER */
.banner{
margin-bottom:10px;
border:2px solid #66ff00;
border-radius:14px;
overflow:hidden;
}

.banner img{
width:100%;
height:120px;
object-fit:cover;
}

/* SMALL GRID */
.small{
display:grid;
grid-template-columns:1fr 1fr;
gap:10px;
}

.card{
height:140px;
border:2px solid #66ff00;
border-radius:14px;
overflow:hidden;
background:#111;
}

.card img{
width:100%;
height:100%;
object-fit:cover;
}

/* BOTTOM */
.bottom{
position:fixed;
bottom:0;
width:100%;
display:flex;
justify-content:space-around;
padding:16px;
background:#001a00;
border-top:2px solid #66ff00;
}

.bottom a{
color:#fff;
font-size:22px;
text-decoration:none;
}
.home{color:#9cff00}
</style>
</head>

<body>

<!-- HEADER -->
<header>

<div class="logo">
<img src="logo.png">
</div>

<div class="btns">

<?php if($user): ?>

<span style="color:#9cff00;font-weight:bold;">
Hi, <?php echo $user; ?>
</span>

<a href="logout.php" class="logout">Logout</a>

<?php else: ?>

<a href="login.php" class="login">Login</a>

<?php endif; ?>

</div>

</header>

<!-- BET INFO -->
<?php if($user): ?>
<div style="padding:10px;background:#002b00;">
💰 Balance: <?php echo $balance; ?> | Exposure: <?php echo $exposure; ?>
</div>
<?php endif; ?>

<div class="wrap">

<!-- 🔥 SLIDER ADDED -->
<div class="slider">
<img id="sliderImg" src="slider1.png">
</div>

<!-- BANNERS -->
<div class="banner"><img src="banner1.png"></div>
<div class="banner"><img src="banner2.png"></div>
<div class="banner"><img src="banner3.png"></div>
<div class="banner"><img src="banner4.png"></div>

<!-- SMALL CARDS -->
<div class="small">

<img class="card" src="small1.png">
<img class="card" src="small2.png">
<img class="card" src="small3.png">
<img class="card" src="small4.png">
<img class="card" src="small5.png">
<img class="card" src="small6.png">
<img class="card" src="small7.png">
<img class="card" src="small8.png">
<img class="card" src="small9.png">
<img class="card" src="small10.png">

<img class="card" src="small11.png">
<img class="card" src="small12.png">
<img class="card" src="small13.png">
<img class="card" src="small14.png">
<img class="card" src="small15.png">
<img class="card" src="small16.png">
<img class="card" src="small17.png">
<img class="card" src="small18.png">
<img class="card" src="small19.png">
<img class="card" src="small20.png">

<img class="card" src="small21.png">
<img class="card" src="small22.png">
<img class="card" src="small23.png">
<img class="card" src="small24.png">
<img class="card" src="small25.png">
<img class="card" src="small26.png">
<img class="card" src="small27.png">
<img class="card" src="small28.png">
<img class="card" src="small29.png">
<img class="card" src="small30.png">

</div>

</div>

<!-- BOTTOM BANNER -->
<div class="banner">
<img src="bigbottom.png" style="height:80px;width:100%;object-fit:cover;">
</div>

<!-- BOTTOM MENU -->
<div class="bottom">
<a href="#">Sports</a>
<a href="#" class="home">Home</a>
<a href="#">Account</a>
</div>

<!-- 🔥 SLIDER SCRIPT -->
<script>
let slides = [
"slider1.png",
"slider2.png",
"slider3.png",
"slider4.png"
];

let i = 0;

setInterval(() => {
i++;
if(i >= slides.length){
i = 0;
}
document.getElementById("sliderImg").src = slides[i];
}, 2000);
</script>

</body>
</html>
