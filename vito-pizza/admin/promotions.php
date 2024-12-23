<?php

require_once("db_con.php");

$sql = "SELECT * FROM `image_promo`";

$result = $conn->query($sql);

$image_data = [];

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $image_data[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'resolution' => $row['resolution'],
        ];
    }
} else {
    echo "No records found.";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Promotions</title>
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
            width: 500px;
            height: 500px;
            border: 2px solid #ccc;
            overflow: hidden;
        }

        .flex-container>div {
            width: 100px;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }

        .flex-images {
            flex: 1;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .page-btn {
            width: 200px;
            height: 70px;
            border-radius: 20px;
            background-color: aqua;
        }
    </style>

</head>

<body>

    <div class="cus-container">

        <div style="display:flex; justify-content:center;margin-top: 15vh;">
            <?php
            echo promotions($image_data);
            ?>
        </div>

        <?php
        require_once 'upload_modal.php';
        ?>

        <button class="page-btn" onclick="window.location.href = './index.php'">Back to Home</button>
    </div>

    <?php

    function promotions($image_data)
    {
        $images = '';

        for ($i = 0; $i < count($image_data); $i++) {

            $images .= '<div class="flex-item" data-bs-toggle="modal" data-bs-target="#update-image" data-answer="' . $image_data[$i]["id"] . '"  onclick="updateImage(this)"><img class="flex-images" src="./images/gallery/' . $image_data[$i]["name"] . '" style="" ></div>';
        }

        $slide = '<div class="flex-container">
                        ' . $images . '
                  </div>';

        return $slide;
    }
    ?>

    <script>
        var image_id; 

        function updateImage(image) {
           
            const imageTag = image.querySelector('img');
            image_id = image.dataset.answer;
            console.log(image_id);

        }

        // for pass table name to upload function
        document.getElementById("uploadForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            const tableName = "image_promo";
            const imageId = image_id;
            uploadImage(tableName,imageId); 
        });
        // for pass table name to upload function
    </script>




</body>

</html>