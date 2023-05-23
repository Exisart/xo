<?php

function setX() {
  foreach ($_SESSION['array'] as $key => $value) {
    if ($key == key($_POST)) {
      $_SESSION['array'][$key] = 'x';
    }
  }
}

function setO() {
  $i = 0;
  foreach ($_SESSION['array'] as $value) {
    if ($value == 'x') {
      $i++;
    }
  }

  if ($i === 1) { // 1

  }

  if ($i === 2) { // 2

  }

  if ($i === 3) { // 3

  }

  if ($i === 4) { // 4

  }

  //$_SESSION['array'][$key] = 'o';
}

function createArray() {
  $_SESSION['array'] = array(
    1 => '?',
    2 => '?',
    3 => '?',
    4 => '?',
    5 => '?',
    6 => '?',
    7 => '?',
    8 => '?',
    9 => '?'
  );
}

function winner() {
  if (
    ($_SESSION['array'][1] == 'x' && $_SESSION['array'][2] == 'x' && $_SESSION['array'][3] == 'x') ||
    ($_SESSION['array'][4] == 'x' && $_SESSION['array'][5] == 'x' && $_SESSION['array'][6] == 'x') ||
    ($_SESSION['array'][7] == 'x' && $_SESSION['array'][8] == 'x' && $_SESSION['array'][9] == 'x') ||
    ($_SESSION['array'][1] == 'x' && $_SESSION['array'][4] == 'x' && $_SESSION['array'][7] == 'x') ||
    ($_SESSION['array'][2] == 'x' && $_SESSION['array'][5] == 'x' && $_SESSION['array'][8] == 'x') ||
    ($_SESSION['array'][3] == 'x' && $_SESSION['array'][6] == 'x' && $_SESSION['array'][9] == 'x') ||
    ($_SESSION['array'][1] == 'x' && $_SESSION['array'][5] == 'x' && $_SESSION['array'][9] == 'x') ||
    ($_SESSION['array'][3] == 'x' && $_SESSION['array'][5] == 'x' && $_SESSION['array'][7] == 'x')
  ) {
    return 'x';
  }

  if (
    ($_SESSION['array'][1] == 'o' && $_SESSION['array'][2] == 'o' && $_SESSION['array'][3] == 'o') ||
    ($_SESSION['array'][4] == 'o' && $_SESSION['array'][5] == 'o' && $_SESSION['array'][6] == 'o') ||
    ($_SESSION['array'][7] == 'o' && $_SESSION['array'][8] == 'o' && $_SESSION['array'][9] == 'o') ||
    ($_SESSION['array'][1] == 'o' && $_SESSION['array'][4] == 'o' && $_SESSION['array'][7] == 'o') ||
    ($_SESSION['array'][2] == 'o' && $_SESSION['array'][5] == 'o' && $_SESSION['array'][8] == 'o') ||
    ($_SESSION['array'][3] == 'o' && $_SESSION['array'][6] == 'o' && $_SESSION['array'][9] == 'o') ||
    ($_SESSION['array'][1] == 'o' && $_SESSION['array'][5] == 'o' && $_SESSION['array'][9] == 'o') ||
    ($_SESSION['array'][3] == 'o' && $_SESSION['array'][5] == 'o' && $_SESSION['array'][7] == 'o')
  ) {
    return 'o';
  }
}