<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <?php
    include("includes/head_links.php");
    ?>
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <?php
    include("includes/header.php");
    ?>
    <div class="banner-container">
        <h1 class="white pb-3">Happiness Per Square Foot</h1>
        <form id="search-form " action="propertylist.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>
    <div class="page-container">
        <h1 class="h-secondary center">Major Cities</h1>
        <div class="row ">
            <div class="city-card-container col-md">
                <a href="propertylist.php?city=delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" alt="delhi">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="propertylist.php?city=mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" alt="mumbai">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="propertylist.php?city=bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" alt="bengaluru">
                    </div>
                </a>
            </div>
            <div class="city-card-container col-md">
                <a href="propertylist.php?city=hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" alt="hyderabad">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include("includes/signup_modal.php");
    include("includes/login_modal.php");
    include("includes/footer.php");
    ?>
</body>

</html>