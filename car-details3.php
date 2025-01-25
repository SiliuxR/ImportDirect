<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "2001 Mazda RX-7 Spirit R";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/9d5418a0eef24fe097505c53789ab995.jpg";
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

        <a href="#" class="enquire-button">Enquire Now</a>
    </div>
</body>

</html>