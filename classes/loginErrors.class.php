<?php

class LoginErrors{

    public function showError($error){

        if($error=="emptyfields"){
            echo "<p>Empty fields!<br>Try again</p>";
        }
        if($error=="wronguname"){
            echo "<p>Wrong username!<br>Try again</p>";
        }
        if($error=="wrongpwd"){
            echo "<p>Wrong password!<br>Try again</p>";
        }
    }
}