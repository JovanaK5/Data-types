<?php

  //define and use strings

  $name1 = "Jovana1";
  $name2 = "Jovana2";

  echo "$name1 and $name2" . "</br>" ;
  echo '$name1 and $name2' . "</br>" ;

  //combine strings
  $name3 = $name1 . "-" . $name2;
  echo $name3. "</br>" ;

  //escape characters
  $name4 = "This is \"special\"  string ";
  echo $name4. "</br>" ;


  $name4 = "\t\tThis is \"special\"  string ";
  echo $name4. "</br>" ;

  echo highlight_string($name1);

