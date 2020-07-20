
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">

        <iframe src="https://drive.google.com/embeddedfolderview?id=1cFdhu4QuhElZh66SSUAcp_HDCCvsLJ-K" width="100%" height="500" frameborder="0"></iframe>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
