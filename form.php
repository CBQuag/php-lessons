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
<fieldset >
    <legend>login</legend>
    <input name="username">
    <input name="password" type="password">
<!-- readonly attribute prevents changing. could be good for a review or something -->
    <button>Send</button>
</fieldset>

    <br/>

    <select name="country" >
    <optgroup label="Europe">
        <option value="germany">Germany</option>
        <option value="france">France</option>

</optgroup>
<optgroup label="America">
<option value="us" selected>United States</option>
<option value="mexico">Mexico</option>
</optgroup>

</select>

<div>
    agree? <input type="checkbox" name="terms" >
</div>

<input type="textarea">

<div><input type="checkbox" name="colors[]">blue</div>
<div><input type="checkbox" name="colors[]">red</div>
<button>send</button>


<label for="title">Title</label>
<input id="title" name="article title">


<input type="checkbox" id="agree">
<label for="agree">Agree</label>


<label><input type="checkbox">better agree</label>

</form>
    
</body>
</html>