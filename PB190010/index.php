
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php 
   if ($sysrole == "Publisher" && $dash_url == "/PB190010" || $sysrole == "admin") {
    $pub_id = "PB190010";
    $sql = "SELECT * FROM publisher WHERE id='" . $pub_id . "'";
    $dstudio_url = '';
    $is_active = 0;
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
            $is_active = $row["is_active"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    if($is_active == 1){

    echo '<div class="container">
    <iframe width="1200" height="900" src="' . $dstudio_url . '" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>';}
    else if($is_active == 0){
         echo '<div class="container"><center><img src="https://www.seendigital.asia/dashboard/images/maintain.jpg" width=60%></center></div>';
    }
    }else{
        echo 'Unauthorized Access';
    }
?>


<?php include '../lib/footer.php'; ?>
