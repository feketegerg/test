<?php
include_once "userModel.class.php";

class UserController extends UserModel{

    //Inputs from login form (uname,pwd)
    public function CheckUsers($uname,$pwd){

        //Store results from getUser
        $results = $this->getUser($uname);
        //Got result or not
        if(!$results){
            header("Location: ../pages/login.php?error=wronguname");
            exit();
        }
        if($results){
            //If multiple username is enabled
            foreach($results as $result){
                $checkPwd = password_verify($pwd,$result['pwd']);

                if($checkPwd==true){
                    session_start();
                    $_SESSION['uid'] = $result['id'];
                    $_SESSION['uname'] = $result['uname'];
                }
            }
        }
    }
}