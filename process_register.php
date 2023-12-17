<?php
if (!empty($_POST)) {
    $msg = "";

    if (
        empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) ||
        empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail']) || empty($_POST['city'])
    ) {
        $msg .= "<li>Please fill in all the required fields";
    }

    if ($_POST['pwd'] != $_POST['cpwd']) {
        $msg .= "<li>Please enter your password again";
    }

    if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $msg .= "<li>Please enter a valid email address";
    }

    if (strlen($_POST['pwd']) > 10) {
        $msg .= "<li>Please enter your password in a limited format";
    }

    if (is_numeric($_POST['fnm'])) {
        $msg .= "<li>Name must be in string format";
    }

    if ($msg != "") {
        header("location:register.php?error=" . $msg);
    } else {
        $fnm = $_POST['fnm'];
        $unm = $_POST['unm'];
        $pwd = $_POST['pwd'];
        $gender = $_POST['gender'];
        $email = $_POST['mail'];
        $contact = $_POST['contact']; // Assuming you have a 'contact' field in your form
        $city = $_POST['city'];

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "final_shop";

        // Create a connection
        $link = mysqli_connect($host, $user, $password, $database);

        // Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO user(u_fnm, u_unm, u_pwd, u_gender, u_email, u_contact, u_city) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($link, $query);

        mysqli_stmt_bind_param($stmt, "sssssss", $fnm, $unm, $pwd, $gender, $email, $contact, $city);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Close the statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($link);

        header("location:register.php?ok=1");
    }
} else {
    header("location:index.php");
}
?>
