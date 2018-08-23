<?php

//Created By Ankur(AnkDos)
//dummy username and password given for security reasons 

//defining all the creds
 define('DBHOST', 'localhost');
 define('DBUSER', 'USERNAME HERE');
 define('DBPASS', 'KEY HERE');
 define('DBNAME', 'DATABASE NAME');
 $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME); //establishing connection
 if ( !$con ) {                  
  echo ("Connection Failed");     // if error occurs   
 }
?>
