<?php
$title = "The expo is set to attract 400 exhibitors from 18 countries and territories, including India, Poland, Taiwan (China), Germany, the Republic of Korea, Malaysia, the US, Russia, Japan, Singapore, Spain, Turkey, mainland China, Australia and Italy.";
$content = "<img src='https://image.vietnamnews.vn/uploadvnnews/Article/2023/5/9/281688_4528630434414494_image.png' alt=''>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed Php into Html</title>
</head>

<body>
    <style>
        h1 {
            color: red;
        }
    </style>
    <h1>Embed Php into Html</h1>
    <div class="title">
        <?php echo $title; ?>
    </div>
    <div class="content">
        <?php echo $content; ?>
    </div>
</body>

</html>