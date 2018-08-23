<?php

//Created By Ankur(AnkDos)
//dummy username and password given for security reasons 

define('DBHOST', 'localhost');
 define('DBUSER', 'USERNAME HERE');
 define('DBPASS', 'KEY HERE');
 define('DBNAME', 'DATABASE NAME');
 $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 if ( !$con ) {
  echo ("Connection Failed");
 }
?>