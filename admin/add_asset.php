
<?php include '../lib/header.php'; ?>
<?php include '../lib/connect.php'; ?>
<?php

    if ($sysrole == 'admin') {
        $admin_username = $_SESSION['auth'];
        $sql = "SELECT * FROM asset_url WHERE username='" . $admin_username . "'";
        $asset_url = '';
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
                $asset_url = $row["asset_url"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();


        echo '<div class="container">
            <iframe src="https://datastudio.google.com/embed/reporting/9c3b4975-93bc-41f5-bb2b-801b04b65312/page/3fuPB" width="1200" height="810"></iframe>
    </div>';
    } else {
        echo '<p>Unauthorized Access</p>';
        
    }
?>


<?php include '../lib/footer.php'; ?>
