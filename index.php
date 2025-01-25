<!DOCTYPE html>
<html>

<head>
    <title>Car Display</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $cars = [
        [
            "name" => "1996 Toyota Supra MK4",
            "image" => "https://m.atcdn.co.uk/a/media/w1024/8dd2691bd66e4862a02222d9b338815d.jpg",
            "detailsPage" => "car-details1.php"
        ],
        [
            "name" => "1999 Nissan Skyline GT-R R34",
            "image" => "https://m.atcdn.co.uk/a/media/w1024/96c9433c71be4b3cb1b0f48f53622d6b.jpg",
            "detailsPage" => "car-details2.php"
        ],
        [
            "name" => "2001 Mazda RX-7 Spirit R",
            "image" => "https://m.atcdn.co.uk/a/media/w1024/9d5418a0eef24fe097505c53789ab995.jpg",
            "detailsPage" => "car-details3.php"
        ]
    ];
    ?>

    <div class="car-container">
        <?php foreach ($cars as $car): ?>
            <div class="car-item">
                <a href="<?= $car['detailsPage'] ?>">
                    <img src="<?= $car['image'] ?>" alt="<?= $car['name'] ?>">
                </a>
                <h2><?= $car['name'] ?></h2>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>