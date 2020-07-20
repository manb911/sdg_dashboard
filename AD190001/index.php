
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

if ($sysrole == 'Advertiser' && $dash_url == '/AD190001' || $sysrole == 'admin') {
    $adv_id = "AD190001";
    $sql = "SELECT * FROM advertiser WHERE id='" . $adv_id . "'";
    $dstudio_url = '';
    // Create connection
    $conn = new mysqli($host, $user, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $dstudio_url = $row["dstudio_url"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();


    echo '<div class="container">
    <iframe width="1200" height="1850" src="' . $dstudio_url . '" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>';
} else {
    echo 'Unauthorized Access';
}
?>


<?php include '../lib/footer.php'; ?>
