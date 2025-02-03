<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "2001 Mazda RX-7";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/5dbbd8c27a314403836cfd83f8a91725.jpg";
    $year = 2001;
    $fuelType = "Petrol";
    $transmission = "Manual";
    $engine = "1.3L Twin-Rotor Wankel Engine";
    $features = "5-Speed Manual Transmission<br>Rear Wheel Drive";
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

        <a href="enquiry.php" class="enquire-button">Enquire Now</a>
    </div>
</body>

</html>