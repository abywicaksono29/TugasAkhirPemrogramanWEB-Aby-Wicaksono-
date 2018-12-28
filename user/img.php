<?php
    include("../config/config.php");
    if(isset($_GET['id'])) {
        $img = query("SELECT photo FROM user WHERE id = :id",array(':id'=>$_GET['id']))[0]["photo"];
        header("Content-type: image/png");
        echo $img;
    }
?>