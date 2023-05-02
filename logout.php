<?php
    session_start();
    $_SESSION['loggedIn'] = false;
   
    header("Location: index.php?info=loggedOut");
    exit();

?>