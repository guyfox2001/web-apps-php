<?php
    session_start();
    $start = 3
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="content/styles.css" rel="stylesheet" type="text/css">
    <link href="content/announsments_css.css" rel="stylesheet" type="text/css">
    <link href="content/md_auth.css" rel="stylesheet" type="text/css">
    <title>lab-2</title>
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</head>
<body id="body">
    <div id="main_block">
        <header id="header">
            <div id ="header_grid">
                <div class= "header_text">
                    <p id = "an">Anouncments</p>
                    <p id = "for">for you!</p>
                </div>
                <div id="header_buttons">
                    <button class = "button" type="button" name="home_button">Home</button>
                    <button class = "button" type="button" name="same_button_1">Click me!</button>
                    <button class = "button" type="button" name="same_button_2">Click me!</button>
                    <button class = "button" type="button" name="same_button_3">Click me!</button>
                </div>
                <div id="header_auth_buttons">
                    <button class="button_auth" id="sign_in" type="button" name="sign_in_button">Sign In</button>
                    <button class="button_auth" id="sign_out" type="button" name="sign_in_out">Sign Out</button>
                </div>
            </div>
        </header>

        <div id="anouncements">

        </div>
        <button id="load">Load More!</button>
    </div>

</body>
</html>