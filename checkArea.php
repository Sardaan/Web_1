<?php

session_start();

$currentTime = date("H:i:s", strtotime('+3 hour'));
$start = microtime(true);

$x = $_POST['x_value'];
$y = $_POST['y_value'];
$r = $_POST['r_value'];

function check($x, $y, $r){

    return ($x >= -$r && $x <= 0 && $y <= 0 && $y >= -$r)
        || ($y <= ($x + $r / 2) && $y <= 0 && $x >= 0)
        || (($x * $x + $y * $y) <= $r * $r / 4 && $x >= 0 && $y >= 0);

}

if (!in_array($x, array(-5, -4, -3, -2, -1, 0, 1, 2, 3))
    || !is_numeric($y) || $y < -3 || $y > 3 || !is_numeric($r) || $r < 2 || $r > 5) {
    http_response_code(400);

    return;
}
$res = check ($x, $y, $r);
$time = microtime(true) - $start;
$resultat = array($x, $y, $r, $res, $currentTime, $time);
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = array();
}

array_push($_SESSION['history'], $resultat);

include "table.php";
?>

