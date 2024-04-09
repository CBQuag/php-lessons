<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'includes/database.php';

    $sql = "INSERT INTO  article (title, content, published_at)
            VALUES ('" . mysqli_escape_string($conn, $_POST['title']) . "','"
        . mysqli_escape_string($conn, $_POST['content']) . "','"
        . mysqli_escape_string($conn, $_POST['published_at']) . "')";


    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $id = mysqli_insert_id($conn);
        echo "inserted values with id: " . $id;
    }
}

?>



<?php require 'includes/header.php'; ?>

<h2>add new article</h2>

<form method="post">

<div>
<label><input name="title" placeholder="article title"></label>
</div>

<div>
<label><textarea name="content" id="content" cols="40" rows="4" placeholder="article content"></textarea></label>
</div>


<div>
<label><input type="datetime-local" name="published_at" id="published_at"></label>
</div>

<button>Add</button>

</form>

</body>
</html>