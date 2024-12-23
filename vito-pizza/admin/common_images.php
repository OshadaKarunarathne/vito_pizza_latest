<?php
require_once("db_con.php");
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
} else {

    $user_id = $_SESSION['user_id'];
}

if (isset($_GET['tab_id'])) {
    $tab_id = $_GET['tab_id'];
} else {
    $tab_id = 1;
}

$landingPageArray = [];

$menuPageArray = [];

$deliveryPageArray = [];

$reviewsPageArray = [];

$giveawayPageArray = [];

$sql = "SELECT * FROM `image_index_page` ORDER BY `image_index_page`.`image_id` ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $landingPageArray[] = [
            'id' => $row['id'],
            'image_id' => $row['image_id'],
            'name' => $row['name'],
            'page' => $row['page'],
            'resolution' => $row['resolution'],
            'display_location' => $row['display_location'],
        ];
    }
}

$sql = "SELECT * FROM `image_menu_page` ORDER BY `image_menu_page`.`image_id` ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $menuPageArray[] = [
            'id' => $row['id'],
            'image_id' => $row['image_id'],
            'name' => $row['name'],
            'page' => $row['page'],
            'resolution' => $row['resolution'],
            'display_location' => $row['display_location'],
        ];
    }
}

$sql = "SELECT * FROM `image_bestview_page` ORDER BY `image_bestview_page`.`image_id` ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $bestviewPageArray[] = [
            'id' => $row['id'],
            'image_id' => $row['image_id'],
            'name' => $row['name'],
            'page' => $row['page'],
            'resolution' => $row['resolution'],
            'display_location' => $row['display_location'],
        ];
    }
}

$sql = "SELECT * FROM `image_reviews_page` ORDER BY `image_reviews_page`.`image_id` ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $reviewsPageArray[] = [
            'id' => $row['id'],
            'image_id' => $row['image_id'],
            'name' => $row['name'],
            'page' => $row['page'],
            'resolution' => $row['resolution'],
            'display_location' => $row['display_location'],
        ];
    }
}

$sql = "SELECT * FROM `image_giveaway` ORDER BY `image_giveaway`.`image_id` ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $giveawayPageArray[] = [
            'id' => $row['id'],
            'image_id' => $row['image_id'],
            'name' => $row['name'],
            'page' => $row['page'],
            'resolution' => $row['resolution'],
            'display_location' => $row['display_location'],
        ];
    }
}



// for ($i = 0; $i < count($general_images_data); $i++) {

//     $page = $general_images_data[$i]['page'];

//     if ($page == 'landing_page') {
//         $landingPageArray[] = $general_images_data[$i];
//     }

//     if ($page == 'menu_page') {
//         $menuPageArray[] = $general_images_data[$i];
//     }

//     if ($page == 'delivery_page') {
//         $deliveryPageArray[] = $general_images_data[$i];
//     }

//     if ($page == 'reviews_page') {
//         $reviewsPageArray[] = $general_images_data[$i];
//     }
// }

// print_r($landingPageArray);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Common Images</title>
    <link rel="shortcut icon" href="../images/index/vito-logo.png" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="../images/apple-touch-icon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('../fonts/Poppins-Regular.ttf') format('truetype');
        }


        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .cus-container {
            /* position: relative; */
            width: 100%;
            height: 100vh;

            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            padding-top: 10px;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            /* width: 55vw; */
            width: 80vw;
            /* change */
            /* height: 70vh; */
            /* border: 2px solid #ccc; */
            /* overflow: hidden; */
            justify-content: space-evenly;
            grid-row-gap: 50px;
            margin-top: 160px;
            grid-column-gap: 30px;
        }

        .flex-container>div {
            height: 250px;
            width: 250px;
        }

        .flex-images {
            flex: 1;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .flex-images :hover {
            width: 120%;
            height: 120%;
        }

        .page-btn {
            width: 200px;
            height: 70px;
            border-radius: 20px;
            background-color: aqua;
        }

        .btn-holder {

            /* width: 100%; */
            flex-wrap: nowrap;
            display: inline-flex;
            padding: 10px;
            justify-content: space-between;
            align-items: center;
            gap: 10px;

            border-radius: 100px;
            background: #F2F2F2;
        }

        .top-btn {
            text-wrap: nowrap;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 83px;
            border: none;
            color: #151515;
            font-family: "Poppins";
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-transform: capitalize;
        }

        .top-btn.active {
            background-color: #151515;
            color: #F2F2F2;
            font-family: "Poppins";
            font-size: 18px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-transform: capitalize;
        }

        .close-btn {
            border: none;
            background-color: transparent;
            width: 47px;
            height: 47px;
        }

        .resolution {
            color: #6B6B6B;
            font-family: "Poppins";
            font-size: 18px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;

            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
    </style>

</head>

<body>

    <div class="cus-container">
        <div style="display: flex;justify-content: center;position: fixed;top: 0;background-color: #fff;width: 100%;padding: 50px 0;">
            <div style="display: flex; flex-direction: row;align-items: center;justify-content: center;width: 80vw;">
                <div style="margin-left: auto;">
                    <!-- <nav style="margin-left: 32vw;margin-right: 32vw;"> -->
                    <nav style="width:fit-content">
                        <div class="nav btn-holder" id="nav-tab" role="tablist">
                            <button class="nav-link top-btn active" id="nav-land-tab" data-bs-toggle="tab" data-bs-target="#nav-land" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Landing Page Header</button>
                            <button class="nav-link top-btn" id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Menu</button>
                            <button class="nav-link top-btn" id="nav-bestview-tab" data-bs-toggle="tab" data-bs-target="#nav-bestview" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Best Views And Food</button>
                            <button class="nav-link top-btn" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</button>
                            <button class="nav-link top-btn" id="nav-giveaway-tab" data-bs-toggle="tab" data-bs-target="#nav-giveaway" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Giveaway</button>
                        </div>
                    </nav>
                </div>
                <div style="margin-left: auto;">
                    <button class="close-btn" onclick="window.location.href = './index.php'">
                        <img src="./images/close.png" style="width: 47px;height: 47px;">
                    </button>
                </div>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-land" role="tabpanel" aria-labelledby="nav-land-tab">
                <div style="display:flex; justify-content:center;margin-top: 2vh;gap: 8vw;">
                    <?php
                    $style = 'width: auto;';
                    echo images($landingPageArray, 'index_page', $style)
                    ?>
                    <!-- <div style="width:30vw">
                        <img class="flex-images" src="../images/index/top-img.png">
                    </div>
                    <div style="width:30vw">
                        <img class="flex-images" src="../images/index/header-img.png">
                    </div> -->
                </div>
            </div>
            <div class="tab-pane fade" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                <div style="display:flex; justify-content:center;margin-top: 2vh;">
                    <?php
                    $style = 'width: auto;';
                    echo images($menuPageArray, 'menu_page', $style)
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-bestview" role="tabpanel" aria-labelledby="nav-bestview-tab">
                <div style="display:flex; justify-content:center;margin-top: 2vh;">
                    <?php
                    $style = '';
                    echo images($bestviewPageArray, 'views_and_foods', $style)
                    ?>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                <div style="display:flex; justify-content:center;margin-top: 2vh;">
                    <?php
                    $style = ' width: auto; height: 250px;';
                    echo images($reviewsPageArray, 'review_page', $style)
                    ?>
                </div>
            </div>
             
            <div class="tab-pane fade" id="nav-giveaway" role="tabpanel" aria-labelledby="nav-giveaway-tab">
                <div style="display:flex; justify-content:center;margin-top: 2vh;">
                    <?php
                    $style = ' width: auto; height: 250px;';
                    echo images($giveawayPageArray, 'giveaway_page', $style)
                    ?>
                </div>
            </div>
        </div>

        <?php
        require_once 'upload_modal.php';
        ?>
    </div>


    <?php

    function images($image_data, $path, $style)
    {
        $images = '';

        for ($i = 0; $i < count($image_data); $i++) {

            $images .= '<div class="flex-item"  id="' . $i . '" data-bs-toggle="modal" data-bs-target="#update-image"  data-answer="' . $image_data[$i]["image_id"] . '"  onclick="updateImage(this)" style="' . $style . '">
                        <img alt = "' . $path . '" class="flex-images" src="../images/' . $path . '/' . $image_data[$i]["name"] . '" style="" >
                            <span class="resolution">Image Size :' . $image_data[$i]["resolution"] . '</span>
                        </div>';
        }

        $slide = '<div class="flex-container">
                    ' . $images . '
              </div>';

        return $slide;
    }
    ?>

    <script>
        var tabId = <?php echo $tab_id ?>;
        var button1 = document.getElementById('nav-land-tab');
        var button2 = document.getElementById('nav-menu-tab');
        var button3 = document.getElementById('nav-bestview-tab');
        var button4 = document.getElementById('nav-reviews-tab');
        var button5 = document.getElementById('nav-giveaway-tab');

        button1.addEventListener('click', function() {
            tabId = 1;
        });

        button2.addEventListener('click', function() {
            tabId = 2;
        });

        button3.addEventListener('click', function() {
            tabId = 3;
        });

        button4.addEventListener('click', function() {
            tabId = 4;
        });

        button5.addEventListener('click', function() {
            tabId = 5;
        });

        if (tabId == 1) {
            button1.click();
        } else if (tabId == 2) {
            button2.click();
        } else if (tabId == 3) {
            button3.click();
        } else if (tabId == 4) {
            button4.click();
        } else if (tabId == 5) {
            button5.click();
        }

        var image_id;

        var contentType;

        function updateImage(image) {

            const imageTag = image.querySelector('img');
            image_id = image.dataset.answer;
            console.log(image_id);

            contentType = imageTag.alt;

        }

        // for pass table name to upload function
        document.getElementById("uploadForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var tableName;

            if (contentType == "index_page") {
                tableName = "image_index_page";
            } else if (contentType == "menu_page") {
                tableName = "image_menu_page";
            } else if (contentType == "views_and_foods") {
                tableName = "image_bestview_page";
            } else if (contentType == "review_page") {
                tableName = "image_reviews_page";
            } else if (contentType == "giveaway_page") {
                tableName = "image_giveaway";
            }

            const imageId = image_id;
            console.log(tableName,imageId);
            uploadImage(tableName, imageId);
        });
        // for pass table name to upload function
    </script>

</body>

</html>