<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "2005 Subaru Impreza WRX Turbo";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/0b64675a502448c680d3f628d95fcf92.jpg";
    $year = 2005;
    $fuelType = "Petrol";
    $transmission = "Manual";
    $engine = "2.0L Turbo Flat 4 Cylinder Boxer Engine";
    $features = "5-Speed Manual Transmission<br>All Wheel Drive System";
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

        <a href="enquiry.php?car=<?= urlencode(string: $carName) ?>" class="enquire-button">Enquire Now</a>
    </div>
</body>

</html>