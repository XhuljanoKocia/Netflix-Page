<?php
    require_once("includes/config.php");
    require_once("includes/classes/PreviewProvider.php");
    require_once("includes/classes/Entity.php");

    if(!isset($_SESSION["userLoggedIn"])) {
        header("Location: register.php");
    }

    $userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/style/style.css">
        <title>Welcome to Netflix</title>
    </head>

    <body>

        <div class="wrapper">