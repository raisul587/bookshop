<?php
if (!empty($_POST)) {
    $msg = array();
    if (empty($_POST['cat'])) {
        $msg[] = "Please fill in all requirements";
    }

    if (!empty($msg)) {
        echo '<b>Error:-</b><br>';

        foreach ($msg as $k) {
            echo '<li>' . $k;
        }
    } else {
        $link = mysqli_connect("localhost", "root", "") or die("Can't Connect...");

        mysqli_select_db($link, "final_shop") or die("Can't Connect to Database...");

        $cat = $_POST['cat'];

        $query = "insert into category(cat_nm) values('$cat')";

        mysqli_query($link, $query) or die("Can't Execute...");

        mysqli_close($link);
        header("location: category.php");
    }
} else {
    header("location: index.php");
}
?>
