<?php
session_start();
$_SESSION = array();

require_once("db_con.php");

$time = time();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    
    <link rel="shortcut icon" href="../images/index/vito-logo.png" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="../images/apple-touch-icon.png" type="image/x-icon">

    <!-- STYLESHEET -->
    <link href="../css/login_style.css?version=<?php echo $time ?>" rel="stylesheet">

    <!-- GOOGLFONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <div class="cus-container">
        <div class="login">
            <span class="top-title">Forgot Password?</span>


            <form method="POST" class="cus-form">

                <span class="forgot-intro">Enter the email address you used when you joined and we’ll send you instructions to reset your password.</span>

                <div class="forgot-email">
                    <input class="login-input" type="email" id="exampleDropdownFormEmail2" name="email" placeholder="Email Address">
                </div>
                
                <div class="login-div margin2" style="margin-bottom: 60px;">  
                    <button class="btn reset-btn" type="submit" name="logins">Sent Reset Introductions</button>
                </div>

            </form>

            
        </div>
    </div>

    <div class="txt-box">
        <span class="power">Powered By</span>
        <span class="orise">Orise</span>
    </div>
</body>

</html>