<!DOCTYPE html>
<html>

<head>
    <title>Car Display</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "1996 Toyota Supra MK4";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/8dd2691bd66e4862a02222d9b338815d.jpg";
    $carDetailsPage = "car-details.php";
    ?>

    <div class="car-container">
        <a href="<?= $carDetailsPage ?>">
            <img src="<?= $carImage ?>" alt="<?= $carName ?>">
        </a>
        <h2><?= $carName ?></h2>
    </div>
</body>

</html>