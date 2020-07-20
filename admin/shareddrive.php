
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">
        <p><a class="btn btn-success" href="https://drive.google.com/drive/folders/1cFdhu4QuhElZh66SSUAcp_HDCCvsLJ-K?usp=sharing" target="_blank"> <i class="fa fa-cloud-upload"></i> Upload to Drive</a></p>
        <div><iframe src="https://drive.google.com/embeddedfolderview?id=1cFdhu4QuhElZh66SSUAcp_HDCCvsLJ-K" width="100%" height="500" frameborder="0"></iframe></div>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
