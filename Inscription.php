<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Inscription</title>
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
    background-image:url('images/Klook%20Travel%20Fest%20Ticket%20in%20Manila.jpg');
    padding: 80px 0;
    text-align: center;
    height: 300px;
}
h1 {
  font-size: 36px;
  margin: 0 0 16px 0;
  background-color:transparent;
  color:beige;
  text-align:center;
}
h2 {
    background-color:transparent;
  color:beige;
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
section {
    text-align: center;
    padding: 40px 0;
}
.features {
    background-color: aliceblue;
    color: #000000;
    border: 1px solid #000;

}
.feature {
    width: 50%;
    display: inline-block;
    font-size:16px;
    
    
}
    .image {
    width: 550px ;
    border: 1px solid ;
    height: 100px;
}
    .marquee {
        color: #000;
        text-transform: capitalize;
        text-align: center;
        font-size: 36pts; 
        font-family: all;
    }
    table {
    width: 600px;
    height: 500px;
 
    }
    input {
        border: 2px solid skyblue;
        background-color:azure;
        width: 450px;
        height: 40px;
    
    }
    .submit {
        background-color: aqua;
        padding: 3px;
        margin: 3px;
        width:150px;
        border-radius: 90px;
        
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
            <li class="navmenu"><a href="Foot.php"> Foot </a> </li>
            <li class="navmenu"><a href="Tennis.php">Tennis </a></li>
            <li class="navmenu"><a href="basketball.php">Basketball </a></li>
            <li class="navmenu"><a href="Inscription.php" > Inscription </a> </li>
            <li class="navmenu"><a href="deconnexion.php" > LOG OUT </a> </li>
        </ul>
            </div>
       
    <header>
        <div class="container">
        <h1>Inscription</h1>
        <h2>This app will change your life!</h2>
        </div>
    </header>
    <script type="text/javascript">
        let header=document.createElement('h3');
        let headerContent = document.createTextNode('bienvenue ');
        header.appendChild(headerContent);
    

    </script>
    <h3 >  <marquee> Pour vous inscrire :</marquee> </h3>
         <section class="features">
        <div class="container">
        <div class="feature">
        </div>
                <div class="feature">
                <form  align="left" method="post" action="insertData.php" >
                <table>
                    <tr>
                        <td><label>Nom :</label></td>
                        <td><input type="text" name="Nom" placeholder="tapez votre nom" required></td>
                    </tr>
                     <tr>
                        <td><label>Email :</label></td>
                        <td><input type="email" name="Nom" placeholder="tapez votre email" required></td>
                    </tr>
                     <tr>
                        <td><label>Telephone :</label></td>
                        <td><input type="text" name="Nom" placeholder="tapez votre telephone" required></td>
                    </tr>
                     <tr>
                        <td><label>Password :</label></td>
                        <td><input type="Password" name="Nom" placeholder="tapez votre Password" required></td>
                    </tr>
                    
                     
                    <tr>
                        <td><input type="submit" name="submit" value="S'inscrire" class="submit"></td>
                        <td><input type="reset" name="reset" value="reset" class="submit"></td>
                    </tr>
                    </table>
                     
                </form>
                </div>
                </div>
                </section>  
    

</body>
</html>