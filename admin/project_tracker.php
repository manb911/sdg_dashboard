
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">
        <p><a class="btn btn-success" href="https://docs.google.com/spreadsheets/d/15bSbkNHNRrX8haWfyxJdeQnSJZHWvJLlNNaxHuOJrmo/edit#gid=1272009159" target="_blank"> <i class="fa fa-edit"></i> แก้ไขข้อมูล</a></p>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQjHF4fYSQaO0SSZ_0Qt-werHgYezHcKerM-o4CZjPmOT25ajjro0n_g6aRvpcbmLo3BwcCyyrzZbor/pubhtml?gid=1272009159&amp;single=true&amp;widget=true&amp;headers=false" width="1200" height="800" frameborder="0"></iframe>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
