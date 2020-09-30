<?php

include_once "../classes/userContr.class.php";
//Checks that the login button pressed or not
if (isset($_POST['login-submit'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    if(empty($uname) || empty($pwd)) {
        header("Location: ../pages/login.php?error=emptyfields");
        exit();
    }

    if(isset($uname) & isset($pwd)){

        $loginValidate = new UserController();
        $loginValidate->CheckUsers($uname,$pwd);

        if(isset($_SESSION['uname'])){
            header("Location: ../pages/index.php");
            exit();
        }
        else{
            header("Location: ../pages/login.php?error=wrongpwd");
            exit();
        } 
    }
}
else{
    header("Location: ../pages/login.php?error=plslogin");
    exit();
}
