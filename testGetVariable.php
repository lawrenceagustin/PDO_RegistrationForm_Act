<?php

if(isset($_GET['lastName'])){
  echo"<h2>Name: " . $_GET['lastName']."</h2>";
}

if(isset($_GET['shopName'])){
  echo"<h2>Shop Name: " . $_GET['shopName']."</h2>";
}