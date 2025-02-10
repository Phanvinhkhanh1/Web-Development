<?php
$notification = "Hello";
$fullName = " Phan Vinh Khanh";

echo "Notification = {$notification}";
echo "<br/>";
echo "FullName = {$fullName}";

echo "<br/>";
echo "========== Concatenate strings ========";
$notification .= $fullName;
echo "<br/>";
echo $notification;
?>