<?php
session_start();

$time = time();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    require_once("./services/auth/auth.php");
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nickName = $_POST['nickName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $auth = new Authentication($conn);

    $authResponse = $auth->signUp($firstName, $lastName, $nickName, $email, $password, $role);
    $signUpError = "";
    if ($authResponse == "Registration successful") {
        header("Location: login.php");
    } elseif ($authResponse == "User already exists.") {
        $signUpError = "**User Exists";
    } else {
        $signUpError = "**Internal Server Error";
    }
}


$user_role = $_SESSION['role'];

if ($user_role === "admin") {
    $user_admin = true; //TODO: SET user admin state 
} else {
    $user_admin = false; //TODO: SET user admin state 
}


if (!$user_admin) {
    header("Location: login.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    
    <link rel="shortcut icon" href="../images/index/vito-logo.png" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="../images/apple-touch-icon.png" type="image/x-icon">

    <!-- STYLESHEET -->
    <link href="../css/signup_style.css?version=<?php echo $time ?>" rel="stylesheet">

    <!-- GOOGLFONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="cus-container">
        <div class="signup">
            <span class="top-title">User Registration</span>


            <form action="sign_up.php" method="post" class="cus-form">
                <div class="name">
                    <input type="text" id="firstName" class="sign-input" value="" name="firstName" placeholder="First Name" required>
                </div>
                <div class="name">
                    <input type="text" id="lastName" class="sign-input" value="" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="name">
                    <input type="text" id="nickName" class="sign-input" value="" name="nickName" placeholder="Nick Name">
                </div>
                <div class="email-head">
                    <input type="email" id="email" class="sign-input" value="" name="email" placeholder="Email Address" required>
                </div>
                <div class="password-head">
                    <input type="password" id="password" class="sign-input" value="" name="password" placeholder="Password" required>
                </div>

                <div class="user-head">
                    <select type="select" id="role" class="sign-input sign-input-select" value="" name="role" placeholder="Role" required>
                        <option class="sign-input" value="" disabled selected>Select</option>
                        <option class="sign-input" value="admin" >Admin</option>
                        <option class="sign-input" value="manager">Manager</option>
                        <option class="sign-input" value="view">View</option>
                    </select>
                </div>

                <div class="sign-div margin2" style="margin-bottom: 60px;">
                    <button class="btn sign-btn" type="submit" name="register">Register</button>
                </div>

                <!--<div class="sign-div">-->
                <!--    <span class="txt-one">Already Have An Account</span> <a class="log-in" href="login.php">Log In</a>-->
                <!--</div>-->
            </form>


        </div>
    </div>

    <div class="txt-box">
        <span class="power">Powered By</span>
        <span class="orise">Orise</span>
    </div>
</body>

</html>



<!-- <div class="error-msg-container">
                <span><?php  ?></span>  echo ($signUpError)
            </div> -->