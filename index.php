<?php

require 'includes/database.php';

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * 
        FROM  article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

require 'includes/header.php';

?>



    <?php if (empty ($articles)): ?>
        <p>No articles found.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($articles as $art): ?>
            <li>
            <h3> <a href="/query-string-practice.php?id=<?=$art["id"]?>"><?= $art["title"]; ?></a> </h3>
            <p> <?= $art["content"]; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>