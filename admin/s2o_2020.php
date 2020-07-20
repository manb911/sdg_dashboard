
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php 
   if ($sysrole == "Publisher" && $dash_url == "/PB190012" || $sysrole == "admin") {
    

    echo '<iframe width="700" height="900" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?resid=270B7ECCD4B3E2FA%2177688&authkey=%21AD3gK5K7-Mcw2II&em=2&wdAllowInteractivity=False&wdHideGridlines=True&wdHideHeaders=True&wdDownloadButton=True&wdInConfigurator=True"></iframe>';
   
    }else{
        echo 'Unauthorized Access';
    }
?>


<?php include '../lib/footer.php'; ?>
