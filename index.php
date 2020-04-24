<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $className = $_REQUEST['name'];

    function validateAccount($str)
    {
        $RegexPatten = "/^(C|A|P){1}\d{4}(G|H|I|K|L|M){1}$/";
        if (preg_match($RegexPatten,$str)){
            return true;
        }else{
            return false;
        }
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    ClassRoom :
    <input type="text" name="name">
    <button type="submit">Check</button>
</form>
<div>
    <?php
    if (isset($className)){
        if (validateAccount($className)){
            echo "Validate ClassName";
        }else{
            echo "Invalid ClassName";
        }
    }
    ?>
</div>
</body>
</html>
