<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "2009 Nissan GT-R";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/5b0d5adbf82d48b3bfbe481dd947b313.jpg";
    $year = 2009;
    $fuelType = "Petrol";
    $transmission = "Automatic";
    $engine = "3.8L V-6";
    $features = "6-Speed Automatic Transmission<br>All Wheel Drive";
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