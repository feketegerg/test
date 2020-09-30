<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div id="upper-header">
            <!-- Header's left side -->
            <div id="header-left-side">
                <div id="left-logo">
                    <img src="img/leftlogo.png" alt="leftlogo">
                </div>
            </div>
            <!-- Header's right side -->
            <div id="header-right-side">
                <!-- Informations & account manage -->
                <div id="right-side-container">
                    <div id="header-information">
                            <!-- Language selector -->
                            <div>
                                <a href="http://">Sitemap</a>
                            </div>
                            <!-- Informations about the website -->
                            <div>
                                <a href="">Contact</a>
                            </div>
                            <div>
                                <a href="http://">English</a>
                            </div>   
                    </div>
                    <!-- Login/Logut/Account info -->
                    <div id="account-panel">
                        <div>
                            <?php
                                if(isset($_SESSION['uname'])){
                                    echo '<form action="../includes/logout.inc.php" method="post">
                                        <button type="submit"><i class="material-icons">cancel</i>Logout</button>
                                        </form>';
                                }
                                if(!isset($_SESSION['uname'])){
                                    echo '<form action="login.php" method="post">
                                        <button type="submit"><i class="material-icons">fingerprint</i>Login</button>
                                        </form>';
                                }
                            ?>
                        </div>
                        <div>
                            <a href="">Valami</a>
                        </div>
                    </div>
                </div>
                <!--  Right side logo -->
                <div id="right-logo">
                    <img src="img/rightlogo.png" alt="rightlogo">
                </div>
            </div>
        </div>
        <div id="lower-header">
        <!-- Navigation between pages -->
            <div id="header-nav">
                <ul>
                    <li><a href="index.php"  id="icon" ><i class="large material-icons">home</i></a></li>
                    <li><a href="index.php">MPAF</a></li>
                    <li><a href="index.php">VENOUS</a></li>
                    <li><a href="index.php">ACS</a></li>
                    <li><a href="index.php">KIVAMOXOBAN STUDIES</a></li>
                    <li><a href="index.php">BACKGROUND INFORMATION</a></li>
                </ul>
            </div>
        </div>
    </header>
</body>
</html>