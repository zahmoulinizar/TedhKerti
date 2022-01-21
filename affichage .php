<?php
include ("Personnage.php");
include("PersonnageManager.php");
$db=new PDO('mysql:host=localhost;dbname=tickets','root','');
$manager=new PersonnageManager($db);
echo"<br>***Liste des ticket ***<br><br>";
$t=$manager->getList() ;
foreach ($t as $val)
echo $val->_refticket."<br>  -   ".$val->_Nom."<br>  -  ".$val->_Email."<br> - ".$val->_Telephone."<br>";
?>
