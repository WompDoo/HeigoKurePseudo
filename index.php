<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Heigo</title>
</head>
<body>


<form action="?">
    <input name="page">
    <input type="submit">
</form>

<?php
if (isset($_GET['page'])) {
    require $_GET['page'] . '.php';
}
$page = (!empty($_GET['page']) ? $_GET['page'] : 'home');
require($page . '.php');
?>

</body>