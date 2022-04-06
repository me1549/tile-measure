<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$answer = $number1 + $number2;
$count = $number3 / $answer;
$floor = floor($count);
$cat = $number3 % $answer - $number2 * 2;

if (isset($number1) && isset($number2) && isset($number3) && is_numeric($number1) && is_numeric($number2) && is_numeric($number3)) {
  header('Location: index.php/?answer=' . $answer . '&count=' . $count . '&floor=' . $floor . '&cat=' . $cat. '&number1=' . $number1. '&number2=' . $number2. '&number3=' . $number3);
} else {
  $message = '無効な値です';
  header('Location: index.php/?message=' . $message);
};
