<?php

include 'database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT * 
        FROM  article
        WHERE id=" . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_assoc($results);
        var_dump($articles);
    }
}
else{
    $articles = null;
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

    <?php if (empty ($articles)): ?>
        <p>No articles found.</p>
    <?php else: ?>

            <h3> <?= $articles["title"]; ?> </h3>
            <p> <?= $articles["content"]; ?></p>

    <?php endif; ?>
</body>
</html>