<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "1996 Toyota Supra MK4";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/8dd2691bd66e4862a02222d9b338815d.jpg";
    $year = 1999;
    $fuelType = "Petrol";
    $transmission = "Manual";
    $engine = "3.0L Inline 6 Cylinder Twin-Turbo";
    $features = "6-Speed Manual Transmission<br>All Wheel Drive System";
    ?>

    <div class="details-container">
        <img src="<?= $carImage ?>" alt="<?= $carName ?>">
        <h2><?= $carName ?></h2>

        <div class="info">
            <span><?= $year ?></span>
            <span><?= $fuelType ?></span>
            <span><?= $transmission ?></span>
        </div>

        <p><strong>Engine:</strong> <?= $engine ?></p>
        <p><?= $features ?></p>

        <a href="#" class="enquire-button">Enquire Now</a>
    </div>
</body>

</html>