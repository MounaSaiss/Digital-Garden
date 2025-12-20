<?php
include "../config/database.php";
session_start();


if (isset($_POST["Register"])) {
    registerUser($conn);
}
if (isset($_POST["login"])) {
    loginUser($conn);
}
if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    redirectToLogin();
}

function registerUser($conn){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $password_confirm = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_SPECIAL_CHARS);

    $errors = [];
    if (!$username) {
        $errors['username'] = 'Username  required';
    } elseif (!preg_match('/^[a-zA-Z]{3,}$/', $username)) {
        $errors['username'] = 'Username Invalid ';
    }

    if (!$email) {
        $errors['email'] = 'Invalide email';
    }

    if (!$password || !$password_confirm) {
        $errors['password'] = 'Password  required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be  6 characters';
    } elseif ($password !== $password_confirm) {
        $errors['password'] = 'Passwords not match';
    }

    if (count($errors) == 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username ,email,password)values('$username', '$email','$password')";

        try {
            $res = mysqli_query($conn, $query);
            redirectToLogin();
            exit;
        } catch (\Throwable $th) {
            echo '<script> alert("erreur disnscription")</script>';
        }
    } else {
        header("Location: inscrit.php?" . http_build_query(['errors' => $errors]));
        exit;
    }
}
function loginUser($conn){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $req = "SELECT * FROM users where email ='$email'";
    $res = mysqli_query($conn, $req);

    if (mysqli_num_rows($res) === 1) {
        $user = mysqli_fetch_assoc($res);
        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["username"];
            header("Location: ../digital-garden/dashboard.php");
            exit;
        }
    }
    redirectToLogin();
    exit;
}



function redirectToLogin(){
    header("Location: ../digital-garden/login.php");
}