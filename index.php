<?php
//je déclare la variable $cookiePseudo toujours en premier avant l'Html
$cookiePseudo = $_COOKIE['pseudo'] ;
?>

<!DOCTYPE>
<html>
<head>
    <title>MiniChat Project II - The Return</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="mdl-layout mdl-js-layout">
        <main class="mdl-layout__content">
            <div class="page-content">
                <ul class="demo-list-item mdl-list" id="conversation">
                    <li class="mdl-list__item">
<!--                        <span class="mdl-list__item-primary-content">-->
<!--                            <strong>--><?php ///**/ ?><!--</strong>: --><?php ///**/ ?>
<!--                        </span>-->
                    </li>
                </ul>
                <!--Création du formulaire!-->
                <?php
                include ("minichat.php");
                ?>
            </div>
        </main>
    </div>

    <!-- Wide card with share menu button -->
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Mini-Chat</h2>
        </div>
        <div class="mdl-card__supporting-text">
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                <!--Récupération des 10 derniers messages!-->
            </a>
            <div class="liste">
                <?php
                include ("select.php");
                ?>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <!-- Material Design Light -->
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
</html>
