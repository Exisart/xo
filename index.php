<?php
session_start();
require_once 'controller/functions.php';

if (isset($_POST['reset'])) {
  createArray(); // create new game
  unset($_POST);
}

if (!isset($_SESSION['array'])) {
  createArray(); // create new game
}

if (isset($_POST)) { // if click button
  setX(); // gamer move
  unset($_POST);

  $win = winner(); // set winner

  if (!(isset($win))) { // if game continues
    setO(); // script move
  }
}

// output winner
if (isset($win) && $win == 'x') {
  echo 'You WIN!!!';
} elseif (isset($win) && $win == 'o') {
  echo 'You loose.';
}


// if winner isset - blocked buttons
if (isset($win)) {
  $wrapperClass = 'gameover';
}

include 'view/home.php';