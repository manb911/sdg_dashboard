<?php

session_start();
if (!$_SESSION['auth'] || $_SESSION['auth'] == "") {
    session_destroy();
    echo "<script>location='https://www.seendigital.asia/dashboard/login'</script>";
} else {
    $online_user = $_SESSION['firstname'];
    $sysrole = $_SESSION['sysrole'];
    $dash_url = $_SESSION['dash_url'];
}
?>

