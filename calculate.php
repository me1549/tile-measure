<?php
$tile = $_POST['tile'];
$joint = $_POST['joint'];
$width = $_POST['width'];
$answer = $tile + $joint;
$count = $width / $answer;
$floor = floor($count);
$cat = $width % $answer - $joint * 2;

if (isset($tile) && isset($joint) && isset($width) && is_numeric($tile) && is_numeric($joint) && is_numeric($width)) {
  header('Location: index.php/?answer=' . $answer . '&count=' . $count . '&floor=' . $floor . '&cat=' . $cat. '&tile=' . $tile. '&joint=' . $joint. '&width=' . $width);
} else {
  $message = '無効な値です';
  header('Location: index.php/?message=' . $message);
};
