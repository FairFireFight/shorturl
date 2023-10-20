<?php
    include('database.php');

    $url_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM urls WHERE id = '$url_id'");

    // check if ID from GET request is valid
    if (mysqli_num_rows($result) === 0) {
        echo "<h2>That URL doesn't seem to exist</h2>";
    } else {
        $row = mysqli_fetch_assoc($result);
        $redirect_to = $row['url'];

        echo "redirecting you to $redirect_to shortly...";
        header('Location: ' . $redirect_to);
        exit;
    }
?>