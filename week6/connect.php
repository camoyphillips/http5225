<?php

//match these settings to your computer and database names
$connect = mysqli_connect('localhost', 'root', 'root', 'schools'); // -> this is the database name
if(!$connect){
  die("Connection failed: " . mysqli_connect_error());
}

