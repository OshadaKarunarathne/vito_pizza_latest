<?php
session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
} else {
    $user_id = $_SESSION['user_id'];
}

$user_name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Home</title>
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

        .cus-container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .page-btn {
            width: 100%;
            height: 560px;
            background-size: cover;
            background-repeat: no-repeat, repeat;
            background-position: center;

            color: #FFF;
            text-align: center;
            font-family: "Poppins";
            font-size: 40px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
            text-transform: uppercase;
            transition: transform 0.2s ease;
        }

        .page-btn:hover {
            transform: scale(1.02);
        }

        .gallery-btn {
            background-image: url(./images/image_gallery.png);
        }

        .common-btn {
            background-image: url(./images/common_image.png);
        }

        .promotion-btn {
            background-image: url(./images/promotions.png);
        }



        .top-title {
            border-radius: 82px;
            background: #F2F2F2;
            width: 534px;
            height: 67px;
            color: #000;
            font-family: "Poppins";
            font-size: 22px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-right: auto;
            margin-left: auto;
        }

        .tab-container {
            display: flex;
            justify-content: center;
            font-size: 20px;
            align-items: center;
            gap: 20px;
            flex-direction: row;
            margin-top: 7vh;
            padding-left: 6vw;
            padding-right: 6vw;
        }


        .logout {
            max-width: 140px;
        }

        @media only screen and (max-width: 950px) {

            .page-btn {
                font-size: 30px;
                height: 485px;
            }
        }

        @media only screen and (max-width: 450px) {

            .tab-container {
                flex-direction: column;
            }

            .page-btn {
                font-size: 21px;
                height: 160px;
            }

            .top-title {
                font-size: 18px;
            }
        }

        .name-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
    </style>

</head>

<body>

    <div class="cus-container">

        <div style="display:flex;justify-content:center;align-items:center;margin-top: 4vh;padding-left: 15vw;padding-right: 6vw;">
            <div class="top-title"><span>Select the image category you want to change</span></div>

            <div class="name-container">
                <span>Hi! <?php echo (ucwords($user_name)) ?></span>
                <a href="sign_up.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 67 67" fill="none">
                        <rect width="67" height="67" rx="33.5" fill="#F2F2F2" />
                        <path d="M45.3333 36.4058V30.1256H39.0531V27.2271H45.3333V20.9469H48.2319V27.2271H54.5121V30.1256H48.2319V36.4058H45.3333ZM27.4589 32.4928C25.3333 32.4928 23.5942 31.8164 22.2415 30.4638C20.8889 29.1111 20.2126 27.372 20.2126 25.2464C20.2126 23.1208 20.8889 21.3816 22.2415 20.029C23.5942 18.6763 25.3333 18 27.4589 18C29.5845 18 31.3237 18.6763 32.6763 20.029C34.029 21.3816 34.7053 23.1208 34.7053 25.2464C34.7053 27.372 34.029 29.1111 32.6763 30.4638C31.3237 31.8164 29.5845 32.4928 27.4589 32.4928ZM12 48V43.4589C12 42.3317 12.2818 41.3092 12.8454 40.3913C13.409 39.4734 14.2222 38.789 15.285 38.3382C17.7005 37.2754 19.8476 36.5266 21.7265 36.0918C23.6053 35.657 25.5136 35.4396 27.4511 35.4396C29.3887 35.4396 31.2915 35.657 33.1594 36.0918C35.0274 36.5266 37.1691 37.2754 39.5845 38.3382C40.6473 38.8213 41.4686 39.5137 42.0483 40.4155C42.628 41.3172 42.9179 42.3317 42.9179 43.4589V48H12ZM14.8986 45.1014H40.0193V43.4589C40.0193 42.9436 39.8744 42.4525 39.5845 41.9855C39.2947 41.5185 38.9082 41.1723 38.4251 40.9469C36.1385 39.8841 34.2061 39.1836 32.628 38.8454C31.0499 38.5072 29.3269 38.3382 27.4589 38.3382C25.591 38.3382 23.8599 38.5072 22.2657 38.8454C20.6715 39.1836 18.7311 39.8841 16.4444 40.9469C15.9614 41.1723 15.5829 41.5185 15.3092 41.9855C15.0354 42.4525 14.8986 42.9436 14.8986 43.4589V45.1014ZM27.4589 29.5942C28.715 29.5942 29.7536 29.1836 30.5749 28.3623C31.3961 27.5411 31.8068 26.5024 31.8068 25.2464C31.8068 23.9903 31.3961 22.9517 30.5749 22.1304C29.7536 21.3092 28.715 20.8986 27.4589 20.8986C26.2029 20.8986 25.1643 21.3092 24.343 22.1304C23.5217 22.9517 23.1111 23.9903 23.1111 25.2464C23.1111 26.5024 23.5217 27.5411 24.343 28.3623C25.1643 29.1836 26.2029 29.5942 27.4589 29.5942Z" fill="black" />
                    </svg>
                </a>

                <a href="login.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 67 67" fill="none">
                        <rect width="67" height="67" rx="33.5" fill="#F2F2F2" />
                        <path d="M21.5 49C20.8333 49 20.25 48.75 19.75 48.25C19.25 47.75 19 47.1667 19 46.5V21.5C19 20.8333 19.25 20.25 19.75 19.75C20.25 19.25 20.8333 19 21.5 19H33.9583V21.5H21.5V46.5H33.9583V49H21.5ZM41.75 41.2917L39.9583 39.5L44.2083 35.25H29V32.75H44.125L39.875 28.5L41.6667 26.7083L49 34.0417L41.75 41.2917Z" fill="black" />
                    </svg>
                </a>

            </div>
        </div>

        <div class="tab-container" style="">
            <button class="page-btn gallery-btn" onclick="window.location.href = './image_gallery.php'">IMAGES<br>GALLERY</button>
            <button class="page-btn common-btn" onclick="window.location.href = './common_images.php'">COMMON<br>IMAGES</button>
            <button class="page-btn promotion-btn">PROMOTIONS</button>
        </div>
        <!-- onclick="window.location.href = './promotions.php'" -->
    </div>


    <script>
    </script>

</body>

</html>