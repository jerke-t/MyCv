<?php
    include("navigation/header.php");

    if(isset($_POST["naam"])){
        echo $_POST["naam"];
    }
    include("navigation/footer.php");

?>