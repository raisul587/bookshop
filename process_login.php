<?php
session_start();

if (!empty($_POST)) {
    $msg = "";

    if (empty($_POST['usernm'])) {
        $msg[] = "No such User";
    }

    if (empty($_POST['pwd'])) {
        $msg[] = "Password Incorrect........";
    }

    if (!empty($msg)) {
        echo '<b>Error:-</b><br>';

        foreach ($msg as $k) {
            echo '<li>' . $k;
        }
    } else {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "final_shop"; // Updated the database name

        $link = mysqli_connect($host, $user, $password, $database);

        // Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $unm = $_POST['usernm'];
        $q = "SELECT * FROM user WHERE u_unm='$unm'";
        $res = mysqli_query($link, $q) or die("Wrong query");
        $row = mysqli_fetch_assoc($res);

        if (!empty($row)) {
            if ($_POST['pwd'] == $row['u_pwd']) {
                $_SESSION = array();
                $_SESSION['unm'] = $row['u_unm'];
                $_SESSION['uid'] = $row['u_pwd'];
                $_SESSION['status'] = true;

                if ($_SESSION['unm'] != "admin") {
                    header("location:index.php");
                } else {
                    header("location:admin/index.php");
                }
            } else {
                echo 'Incorrect Password....';
            }
        } else {
            echo 'Invalid User';
        }

        // Close the connection
        mysqli_close($link);
    }
} else {
    header("location:index.php");
}
?>
