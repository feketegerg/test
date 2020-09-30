<?php
    include_once "header.php";
    include_once "../classes/listView.class.php";
    include_once "../classes/listContr.class.php";

    if(!isset($_SESSION['uname'])){header("Location: ../pages/login.php?access=mustlogin");}

    if (isset($_POST['update'])){
        foreach($_POST['positions'] as $position){
            $index = $position[0];
            $newPosition = $position[1];
            $side = $position[2];

            $updateObj=new ListContr();
            $updateObj->updateListElements($newPosition,$side,$index);
        }
        exit('success');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.style.css">
    <link rel="stylesheet" href="css/table.style.css">
    <script
            src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script
            src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">
    </script>
</head>
<body>
    <main>
        <div id="list-container">
            <div id="table-wrapper">
                <table id="table-left">
                    <tbody id="tbody-left" class="conn-tbody">
                    <?php
                        $leftObj = new ListView();
                        $leftObj->showListElements("left");
                    ?>
                    </tbody>
                </table>
                <table id="table-right">
                    <tbody id="tbody-right" class="conn-tbody">
                    <?php
                        $leftObj = new ListView();
                        $leftObj->showListElements("right");
                    ?>
                    </tbody>
                </table>
            </div>
            <div id="button-wrapper">
                    <button id="save-list" name="save-list">SAVE</button>
            </div>
            <div id="message-wrapper">
                <p id="save-message"></p>
            </div>
        </div>
    </main>
    
</body>
</html>
<script src="../js/sortable.js"></script>
<script src="../js/saveList.js"></script>
<?php
    include_once "footer.php";
?>