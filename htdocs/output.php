<?php 
    include("database.php");

    $url = $_POST['url'];
    $url_id = bin2hex(random_bytes(6)); // generate a 12 char unique ID

    // check if the same url was shortened
    // previously and overwrite $url_id
    $result = mysqli_query($conn, "SELECT * FROM urls WHERE url = '$url'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $url_id = $row['id'];
    } else {
        $create_url_query = "INSERT INTO urls VALUES('$url_id','$url')";
        mysqli_query($conn, $create_url_query);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>URL Shortner</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="centered main">
			<h2 id="title">URL has been Circumcized:<br>
            <?php
                echo "https://localhost/r.php?id=$url_id";
            ?>
        </h2>
		</div>
    </body>
</html>