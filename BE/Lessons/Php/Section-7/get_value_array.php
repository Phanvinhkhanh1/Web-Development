<?php
$array = array(
    "id" => 1,
    "fullName" => "Phan Vinh Khanh",
    "age" => 27
);

$integer = array(2,3,5,6,7,8,9);
echo $integer[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Value of array in PHP</title>
</head>

<body>
    <p>Id :
        <?php echo $array['id'] ?>
    </p>
    <p>FullName :
        <?php echo $array['fullName'] ?>
    </p>
    <p>Age :
        <?php echo $array['age'] ?>
    </p>
</body>

</html>