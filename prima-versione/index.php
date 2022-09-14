<?php

include __DIR__ . '/../data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <title>PRIMA VERSIONE</title>
</head>
    <body>
        <header>
            <img src="../img/logo.svg" alt="Spotify" class="header_logo">
        </header>
        <main>
            <div class="card_wrapper">
                <?php
                    foreach($database as $disc) {                      
                        echo "<div class='card_container'>" . 
                                "<a href='#' class='wrapper'>" . 
                                    "<img src='" . $disc['poster'] . "' alt='" . $disc['title'] . "' class='wrapper_img'>" . 
                                    "<h5 class='title'>" . $disc['title'] . "</h5>" . 
                                    "<h6>" . $disc['author'] . "</h6>" . 
                                    "<h6>" . $disc['year'] . "</h6>" . 
                                "</a>" . 
                            "</div>";
                    }
                ?>     
            </div>
        </main>       
    </body>
</html>