<?php

  //define and check null
  $name = NULL;
  echo $name . "</br>";
  echo ($name) ? "has value" : "doesn't have value"."</br>";

  //check if variable is null
  $name = "0";
  echo ($name) ? "has value" : "doesn't have value"."</br>";
  echo(!is_null($name)) ? "has value" : "doesn't have value"."</br>";

  //remove variable form the program and memory
  unset($name);
  

