<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Cinema</title>
<style type="text/css" ref="stylsheet">
	.menu{
    background-color: #000;
    color: #FF0000;
    text-decoration: none;
    padding: 2px;
    margin: 2px;
}

.navmenu {
    display: inline-block;
    text-transform: capitalize;
    text-decoration: none;
    color:#ff0000;
    text-decoration: none;
    padding: 2px;
    margin: 2px;
}
a {
    text-decoration: none;
    color: #FF0000;
    text-decoration: none;
    padding: 2px;
    margin: 2px;

  
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans','Helvetica Neue',Helvetica, sans-serif;
    line-height: 1.45;
}
header {
    color: #FFFFFF;
    background-image:url('images/mammut1.jpg');
    padding: 80px 0;
    text-align: center;
    height: 300PX;
}
h1 {
  font-size: 36px;
  margin: 0 0 16px 0;
  background-color:transparent;
  color:azure;
  text-align:center;
}
h2 {
  font-weight: 300;
  font-size: 24px;
  margin: 0 0 16px 0;
}
.container {
    margin: 0 auto;
    padding: 0 20px 0 20px;
    max-width: 900px;
}
.btn {
    display: inline-block;
    color: white;
    font-weight: 500;
    font-size: 20px;
    background: #549DA0;
    border: none;
    border-radius: 5px;
    padding: 12px 16px;
    cursor: pointer;
}
.btn:hover {
    background: #468486;
}
section {
    text-align: center;
    padding: 40px 0;
}
.features {
    background: #FFFFFF;
    color: #000000;
}
.feature {
    width: 32%;
    display: inline-block;
    font-size:16px;
}
.feature img {
    width: 40%;
}
.quote {
    background:#549DA0;
    color:#FFFFFF;
}
blockquote {
    margin: 0;
    padding: 0;
    text-align: center;
}
blockquote p {
    margin: 0 0 5px 0;
    font-size: 24px;
}
blockquote cite {
    font-size: 16px;
    font-style: italic;
}  
blockquote cite:before {
    content: '-';
    margin-right: 5px;
}
footer {
    background: #353535;
    padding: 32px 0;
    text-align: center;
    color: #868686;
}
.fluo
{ background-color:black;
color:white;
}
nav ul {
	padding:0px;
	margin:0px;
	list-style-type:none;
	background-color:black;
}
	.image {
	width: 550px ;
	border: 1px solid ;
	height: 100px;
	align :center;
}
	.marquee {
		color: #000;
		text-transform: capitalize;
		text-align: center;
		font-size: 36pts;
		font-family: all;
	}
</style>
</head>
<body>
	<div class="menu">
			     <marquee class="marquee">bienvenue sur votre plateforme   </marquee>
                 <ul >
            <li class="navmenu" ><a href="accueil.php" ><img src="images/LOGO2.png" width=60% weigth=70%/></a></li>
            <li class="navmenu"><a href="accueil.php" > Acceuil </a> </li>
            <li class="navmenu"><a href="Transport.php" > Transport </a> </li>
            <li class="navmenu"><a href="Theatre.php"> Theatre </a> </li>
            <li class="navmenu"><a href="Cinema.php" > Cinema </a> </li>
            <li class="navmenu"><a href="Festival.php"> Festival </a> </li>
            <li class="navmenu"><a href="evenements.php"> Evenements </a> </li>
            <li class="navmenu"><a href="sport.php"> Sport </a> </li>
            <li class="navmenu"><a href="Inscription.php" > Inscription </a> </li>
            <li class="navmenu"><a href="deconnexion.php" > LOG OUT </a> </li>
        </ul>
            </div>
       
    <header>
        <div class="container">
        <h1>Cinema</h1>
        </div>
    </header>