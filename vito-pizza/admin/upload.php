<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once("db_con.php");

if (isset($_POST['table'])) {
    $tableName = $_POST['table'];
} else {
    echo ("Invalid Table");
    exit();
}

// echo json_encode($tableName);

if (isset($_POST['image_id'])) {
    $image_id = $_POST['image_id'];
} else {
    echo ("Invalid image_id");
    exit();
}

// echo json_encode($image_id);

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
} else {
    exit();
}

if($tableName == 'image_gallery'){
    $targetDir = "../images/gallery/";
} else if($tableName == 'customer_snaps'){
    $targetDir = "../images/customer_snaps/";
}else if($tableName == 'image_index_page'){
    $targetDir = "../images/index_page/";
}else if($tableName == 'image_menu_page'){
    $targetDir = "../images/menu_page/";
}else if($tableName == 'image_reviews_page'){
    $targetDir = "../images/review_page/";
}else if($tableName == 'image_bestview_page'){
    $targetDir = "../images/views_and_foods/";
}else if($tableName == 'image_giveaway'){
    $targetDir = "../images/giveaway_page/";
}

// Delete the existing image if it exists --START
$sql = "SELECT * FROM `$tableName` WHERE image_id=$image_id";
$result = $conn->query($sql);
$exist_image_data = [];

while ($row = $result->fetch_assoc()) {
    $exist_image_data[] = [
        'id' => $row['id'],
        'image_id' => $row['image_id'],
        'name' => $row['name'],
    ];
}

$existImageName = $exist_image_data[0]['name'];

// echo($existImageName);
// exit();

$existingImagePath = $targetDir . $existImageName;

if (file_exists($existingImagePath)) {
    unlink($existingImagePath);
}
// echo json_encode($existingImagePath);
// Delete the existing image if it exists --END

$newImageName = $_FILES["image"]["name"];
// echo json_encode($newImageName);

$sql = "UPDATE `$tableName` SET name = '$newImageName' , user_id = '$user_id' WHERE image_id=$image_id";
$conn->query($sql);

$targetFile = $targetDir . $newImageName;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
    $response = array("status" => "success", "message" => "Image replaced successfully.");
    echo json_encode($response);
} 
else {
    $response = array("status" => "error", "message" => "Error replacing the image.");
    echo json_encode($response);
}



