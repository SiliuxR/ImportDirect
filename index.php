<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - JDM Cars</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="logo-banner">
            <h1 class="banner-text">Import Direct JDM</h1>
        </div>
    </header>

    <div class="search-bar-container">
        <input type="text" class="search-bar" placeholder="Search for cars...">
        <button class="search-button">Search</button>
    </div>


    <div class="nav-buttons">
        <button>All Cars</button>
        <button>New Cars</button>
        <button>Lowest Price</button>
        <button>Highest Price</button>
    </div>

    <div class="car-container">
        <?php
        $cars = [
            [
                "name" => "1996 Toyota Supra MK4",
                "image" => "https://m.atcdn.co.uk/a/media/w1024/8dd2691bd66e4862a02222d9b338815d.jpg",
                "detailsPage" => "Supra.php"
            ],
            [
                "name" => "1999 Nissan Skyline GT-R R34",
                "image" => "https://m.atcdn.co.uk/a/media/w1024/96c9433c71be4b3cb1b0f48f53622d6b.jpg",
                "detailsPage" => "Skyline.php"
            ],
            [
                "name" => "2001 Mazda RX-7",
                "image" => "https://m.atcdn.co.uk/a/media/w1024/5dbbd8c27a314403836cfd83f8a91725.jpg",
                "detailsPage" => "Rotary.php"
            ],
            [
                "name" => "2001 Mazda RX-7",
                "image" => "https://m.atcdn.co.uk/a/media/w1024/5dbbd8c27a314403836cfd83f8a91725.jpg",
                "detailsPage" => "Rotary.php"
            ]
        ];

        foreach ($cars as $car): ?>
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