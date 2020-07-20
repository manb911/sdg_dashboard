
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {

        echo '<div class="container">
        <p><a class="btn btn-success" href="https://docs.google.com/spreadsheets/d/1J7YwpFpsTwABq8Wb-x90WuKwjeAIzx6LHk5UD_PXo9o/edit?usp=sharing" target="_blank"> <i class="fa fa-edit"></i> แก้ไขข้อมูล</a></p>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSdm4tNK149N1ispE1Qn2fJOKZI-SfeHqHOfq9H-hL9iFW99dKd4wkoVZakcss7FPPPw-tVgu1755d5/pubhtml?widget=true&amp;headers=false" width="800" height="1200"></iframe>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
