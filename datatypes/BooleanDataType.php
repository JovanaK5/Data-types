<?php

   //define and print boolean variable
   $flag1 = true ;
   $flag2 = false; 
   echo($flag1) ? "true" : "false" . "<br>";
   echo($flag2) ? "true" : "false" . "<br>";
   
   //string as boolean condition 1
   echo "TRUE" . $flag1 . "<br";
   echo "FALSE" . $flag2 . "<br";

   //string as boolean condition 2
   $loogedIn = true;
   $userName = "Jovana";
   echo ($loogedIn && $userName) ? "User logged in" : "User not logged in". "<br";

   //string as boolean condition 3
   $loogedIn = true;
   $userName = "0";
   echo ($loogedIn && $userName) ? "User logged in" : "User not logged in". "<br";

   //integer variable as boolean
   $marks = 6;
   echo($marks) ? "marks has value" : "marks does not have value". "<br";
   //operator results into boolean conditions
   $name = "jovana";
   echo($name === "jovana") ? "yes,it is jovana" : "no,it is not jovana";


