<?php

$time = time();

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
} else {

    $user_id = $_SESSION['user_id'];
}


?>

<style>
    @font-face {
        font-family: 'Poppins';
        src: url('../fonts/Poppins-Regular.ttf') format('truetype');
    }


    body {
        font-family: 'Poppins', sans-serif;
    }

    .upload-modal {
        width: 560px;
        border-radius: 24px;
        padding: 30px;
        flex-direction: column;
    }

    .modal-top {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
    }

    .font {
        color: #151515;
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .img-area {
        position: relative;
        width: 100%;
        height: 240px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 10px;
        border: 2px dashed #151515;
        background: #FFF;
        margin: 30px 0px 30px 0px;
    }

    .img-area img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 100;
    }

    .img-area::before {
        content: attr(data-img);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .5);
        color: #fff;
        font-weight: 500;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        pointer-events: none;
        opacity: 0;
        transition: all .3s ease;
        z-index: 200;
    }

    .img-area.active:hover::before {
        opacity: 1;
    }

    .img-area .icon {
        font-size: 100px;
        color: #dddddd;
    }

    .img-area p {
        color: #999;
    }

    .img-area p span {
        font-weight: 600;
    }

    #upload-link:hover {
        color: blue;
    }

    .btn-area {
        width: 500px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .btn {
        display: block;
        width: 242px;
        height: 50px;
        padding: 10px;
        border-radius: 8px;
    }

    #imgselect-btn {
        border: 2px solid #dddddd;
    }

    #imgselect-btn:hover {
        background-color: #dddddd;
    }

    #change-btn {
        background: #F7BE27;
    }

    #change-btn:hover {
        background-color: #DFAB23;
    }

    #cancel-btn {
        border: none;
        background-color: #FFF;
    }

    #cancel-btn .icon {
        font-size: 40px;
    }
</style>


<!-- Modal -->

<head>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="modal fade" id="update-image" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content upload-modal">

                <div class="modal-top">
                    <div style="    display: flex;flex-direction: column;">
                        <span class="font">Upload files</span>
                        <span class="font" style="color: #999;font-weight: 400;font-size: 18px;margin-top: 5px;">Upload the file you want to change here.</span>
                    </div>
                    <button id="cancel-btn" type="button" data-bs-dismiss="modal" aria-label="Close" onclick="modalClose()"><i class='bx bx-x icon'></i></button>
                </div>

                <div class="img-area" id="img-area" data-img="">
                    <i class='bx bxs-cloud-upload icon'></i>
                    <p>Image size must be less than <span>5MB</span></p>
                </div>

                <!-- <img style="width: 58px;height: 68px; margin-top: 36px;margin-left: auto;margin-right: auto;" src="../admin/images/upload_icon.png" alt="upload_icon">
                <p style="margin-top: auto;margin-bottom: auto;"><span id="upload-link" style="cursor: pointer;text-decoration-line: underline;">click to upload</span></p> -->

                <form id="uploadForm">
                    <input type="file" id="imageInput" accept="image/*" hidden>
                    <!-- <input type="submit" value="Upload Image"> -->
                    <div class="btn-area">
                        <button class="btn" id="imgselect-btn">Select image</button>
                        <button type="submit" value="Upload Image" class="btn" id="change-btn">Upload</button>
                    </div>
                </form>


                <!-- <div style="display:flex;width;100%;"><button type="button" style="width:20px;height:20px;" data-dismiss="modal" aria-label="Close">close</button></div> -->
            </div>
        </div>
    </div>
</body>
<script>
    const uploadLink = document.getElementById('imgselect-btn');
    const img_Area = document.getElementById('img-area');
    const imageInput = document.getElementById('imageInput');
    const imgArea = document.querySelector('.img-area');

    const user_id = <?php echo $user_id ?>;

    img_Area.addEventListener('click', () => {
        imageInput.click(); // Programmatically trigger the file input click
    });

    uploadLink.addEventListener('click', () => {
        imageInput.click(); // Programmatically trigger the file input click
    });

    var selectedFile;

    imageInput.addEventListener('change', (event) => {

        selectedFile = event.target.files[0];

        if (selectedFile) {
            // Handle the selected file as needed
            console.log('Selected file:', selectedFile.name);
        }
    });

    imageInput.addEventListener('change', function() {
        const image = this.files[0]
        if (image.size < 5000000) {
            const reader = new FileReader();
            reader.onload = () => {
                const allImg = imgArea.querySelectorAll('img');
                allImg.forEach(item => item.remove());
                const imgUrl = reader.result;
                const img = document.createElement('img');
                img.src = imgUrl;
                imgArea.appendChild(img);
                imgArea.classList.add('active');
                imgArea.dataset.img = image.name;
            }
            reader.readAsDataURL(image);
        } else {
            alert("Image size more than 5MB");
        }
    })


  function uploadImage(tableName, imageId) {

        console.log(tableName);

        event.preventDefault();
        const formData = new FormData();
        const fileInput = document.getElementById("imageInput");
        const files = fileInput.files;

        if (files.length === 0) {
            // alert("Please select an image to upload.");
            return;
        }

        formData.append("image", files[0]);
        formData.append("table", tableName);
        formData.append("image_id", imageId);
        formData.append("user_id", user_id);
        fetch("upload.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var baseUrl = window.location.pathname.split('/').slice(2).join('/');
                var time = <?php echo $time ?>;
                window.location.href = './' + baseUrl + '?tab_id=' + tabId + '&version=' + time;
                // location.reload();
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }



    function modalClose() {
        const allImg = imgArea.querySelectorAll('img');
        allImg.forEach(item => item.remove());
        imgArea.classList.remove('active');
        imgArea.dataset.img = "";
        selectedFile = null;

        const fileInput = document.getElementById("imageInput");
        fileInput.value = "";
    }
</script>