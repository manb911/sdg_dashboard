<?php include 'connect.php'; ?>
<?php

function userauth() {


    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysql_query("SELECT * FROM users WHERE username='".$username."'");

    while ($row = mysql_fetch_array($sql)) {
        if ($username == $row['username'] && $password == $row['password']) {
            session_start();
            $_SESSION['auth'] = $username;
			$_SESSION['firstname'] = $row['first_name'];
            $_SESSION['sysrole'] = $row['sysrole'];
            $_SESSION['dash_url'] = $row['dashboard_url'];
            $sglAccessLog = mysql_query("INSERT INTO access_log (username) VALUES('" . $username . "')");

            if ($row['sysrole'] == 'Publisher') {
                echo "<script>location='/dashboard" . $row['dashboard_url'] . "'</script>";
            } elseif ($row['sysrole'] == 'Advertiser') {
                echo "<script>location='/dashboard" . $row['dashboard_url'] . "'</script>";
            } elseif ($row['sysrole'] == 'admin') {
                echo "<script>location='/dashboard" . $row['dashboard_url'] . "'</script>";
            }
        } else {
            echo 'Something wrong!<br>';
        }
    }
    echo "Username or password invalid. <a href=https://www.seendigital.asia/dashboard/login>Back</a>";
}

userauth();
?>
