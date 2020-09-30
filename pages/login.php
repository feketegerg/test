<?php
    include_once "header.php";
    include_once "../classes/loginErrors.class.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/main.style.css">
</head>
<body>
    <main>
        <div class="main-container">
            <div class="main-wrapper">
                <form action="../includes/login.inc.php" method="post">
                    <div>
                    <?php
                        if (isset($_GET['access'])) {
                            if($_GET['access']=='mustlogin'){
                                echo "<h4>Please Sign in</h4>";
                            }
                        }
                    ?>
                    </div>
                    <div><h4>User name:</h4></div>
                    <div><input type="text" name="uname" id="uname"></div>
                    <div><h4>Password:</h4></div>
                    <div><input type="password" name="pwd" id="pwd"></div>
                    <div id="button-wrapper">
                        <button type="submit" name="login-submit" id="submit-button">ENTER</button>
                    </div>
                </form>
            </div>
            <div id="message">
            <?php
                if (isset($_GET['error'])) {
                    $errorType=$_GET['error'];
                    $loginError= new LoginErrors();
                    $loginError->showError($errorType);
                }
             ?>
             </div>
        </div>
    </main>
</body>
</html>
<?php
    include "footer.php";
?>