<?php

require 'includes/database.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT * 
        FROM  article
        WHERE id=" . $_GET['id'];

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_assoc($results);
    }
}
else{
    $articles = null;
}

require 'includes/header.php';

?>



    <?php if (empty ($articles)): ?>
        <p>No articles found.</p>
    <?php else: ?>

            <h3> <?= $articles["title"]; ?> </h3>
            <p> <?= $articles["content"]; ?></p>

    <?php endif; ?>
</body>
</html>