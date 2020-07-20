
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

if ($sysrole == 'admin') {
    
   
    echo '<div class="container">
    <iframe width="1200" height="2020" src="https://datastudio.google.com/embed/reporting/4a438442-8776-4b59-bc99-6c017cb18060/page/QSpQB" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>';
} else {
    echo 'Unauthorized Access';
}
?>


<?php include '../lib/footer.php'; ?>
