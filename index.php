<?php
include_once 'Point2D.php';
include_once 'Point3D.php';
$Point1 =new Point2D(5,5);
$Point2 = new Point3D(5,5,5);
echo " - Tọa độ điểm 2D là : ".$Point1->toString();
echo "<br>";
echo "Tọa độ điểm 3D là : ".$Point2->toString();
?>