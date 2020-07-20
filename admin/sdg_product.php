
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">
        
        <div><iframe src="https://datastudio.google.com/embed/reporting/3cef571d-dbb3-460b-a4df-cf9b2974d2c8/page/7b7PB" width="100%" height="910" frameborder="0"></iframe></div>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
