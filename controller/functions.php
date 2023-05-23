<?php

function setX() {
  foreach ($_SESSION['array'] as $key => $value) {
    if ($key == key($_POST)) {
      $_SESSION['array'][$key] = 'x';
    }
  }
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
    ($_SESSION['array'][7] == 'x' && $_SESSION['array'][8] == 'x' && $_SESSION['array'][9] == 'x')
  ) {
    return 'x';
  }
}