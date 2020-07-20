
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">
        <div>
            <span><a class="btn btn-success" href="https://docs.google.com/spreadsheets/d/15bSbkNHNRrX8haWfyxJdeQnSJZHWvJLlNNaxHuOJrmo/edit?usp=sharing" target="_blank"> <i class="fa fa-edit"></i> Update Sales Pipeline</a></span>
        </div>
        <div><iframe src="https://datastudio.google.com/embed/reporting/4d211179-f738-42ef-a9f1-f55af7e0fa74/page/WIGQB" width="100%" height="2010" frameborder="0"></iframe></div>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
