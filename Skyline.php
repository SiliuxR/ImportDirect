<!DOCTYPE html>
<html>

<head>
    <title>Car Details</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $carName = "1999 Nissan Skyline GT-R R34";
    $carImage = "https://m.atcdn.co.uk/a/media/w1024/96c9433c71be4b3cb1b0f48f53622d6b.jpg";
    $year = 1999;
    $fuelType = "Petrol";
    $transmission = "Manual";
    $engine = "2.6L Inline 6 Cylinder Twin-Turbo";
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

        <a href="enquiry.php?car=<?= urlencode(string: $carName) ?>" class="enquire-button">Enquire Now</a>
    </div>

</body>

</html>