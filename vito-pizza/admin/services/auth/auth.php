<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once("./db_con.php");

class Authentication
{
    private $conn;  // Declare the property

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function userCheck($email)
    {
        $sql = "SELECT COUNT(*) AS count FROM user WHERE email = '$email' ";
        $count = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($count);
        $count = $row['count'];

        $userExist = true;
        if ($count == 0) {
            $userExist = false;
        } else {
            $userExist = true;
        }

        return  $userExist;
    }

    function getUser($email)
    {
        $sql = "SELECT * FROM user WHERE email = '$email' ";
        $count = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($count);
        $user["id"] = $row['id'];
        $user["firstName"] = $row['first_name'];
        $user["lastName"] = $row['last_name'];
        $user["nickName"] = $row['nick_name'];
        $user["email"] = $row['email'];
        $user["role"] = $row['role'];
        return  $user;
    }


    function signUp($firstName, $lastName, $nickName, $email, $password, $role)
    {
        $userExists = $this->userCheck($email);

        if ($userExists) {
            http_response_code(409); // HTTP Conflict status code
            return "User already exists.";
        }

        $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (first_name, last_name, nick_name, email, password, role) VALUES ('$firstName', '$lastName', '$nickName', '$email', '$passwordHashed', '$role');";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            http_response_code(201); // HTTP Created status code
            return "Registration successful";
        } else {
            http_response_code(500); // HTTP Internal Server Error status code
            return "Registration failed.";
        }
    }



    function login($email, $password)
    {

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);

        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        $passwordDehashed = password_verify($password,  $hashedPassword);

        if ($passwordDehashed) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['nick_name'];
            return "Login Successful";
        } else {
            return "Invalid Password";
        }
    }
}
