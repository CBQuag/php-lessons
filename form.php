<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    var_dump($_POST);
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
<!-- default method is get -->
<form method="post">
    <input name="username">
    <input name="password" type="password">

    <button>Send</button>

    <br/>

    <select name="country" >
    <optgroup label="Europe">
        <option value="germany">Germany</option>
        <option value="france">France</option>

</optgroup>
<optgroup label="America">
<option value="us">United States</option>
<option value="mexico">Mexico</option>
</optgroup>

</select>

</form>
    
</body>
</html>