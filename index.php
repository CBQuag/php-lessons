<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "userTest";
$db_pass = "password1";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * 
        FROM  article
        WHERE id=1";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $article = mysqli_fetch_assoc($results);
    var_dump($article);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Blog</h1>

    <?php if (empty ($article)): ?>
            <p>No articles found.</p>
    <?php else: ?>
            <ul>

                <h3> <?= $article["title"]; ?> </h3>
                <p> <?= $article["content"]; ?></p>

            </ul>
    <?php endif; ?>
</body>
</html>