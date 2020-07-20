<?php
    session_start();
    
        $_SESSION['auth']="";
        header( "location: https://www.seendigital.asia/dashboard/login" );
    
?>

