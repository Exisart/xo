<?php
session_start();
require_once 'controller/functions.php';

if (isset($_POST['reset'])) {
  createArray();
  unset($_POST);
}

if (!isset($_SESSION['array'])) {
  createArray();
}

if (isset($_POST)) {
  setX();
  unset($_POST);
}

$win = winner();
if ($win == 'x') {
  echo 'You WIN!!!';
}

include 'view/home.php';


/*echo '<pre>';
var_dump($_SESSION['array']);
echo '</pre>';*/

//unset($_SESSION['array']);
