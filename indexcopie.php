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
            include("select.php");
            ?>
        </div>
        <div>

        </div>
    </div>
</div>

<?php
$totalMessages=$bdd->query("SELECT COUNT(id) AS nb_mess FROM chat");

$data=$totalMessages->fetchAll();

foreach ($data as $valeur) {
    echo '<p>Nombre de messages sur le chat :'.$valeur->nb_mess.'</p>';
}
//on déclare la variable en disant que l'on veut que 5 messages/page
$nb_messages_par_page=5;
//la variable nbrePages doit tenir compte du nombre de messages postés
//$nbrePages=$valeur->nb_mess;
$nbrePages=5;
echo '<p>'.$nbrePages.'</p>';
//on calcule ainsi le nombre de pages (en tenant compte du nombre des messages postés et
//de leur affichage par page
$calculPages=ceil($nbrePages/$nb_messages_par_page);
    for($i=1; $i<=$calculPages+1; $i++)
        if ($i == $pageActu) {
            echo "$i /";
        }
        else {
            echo "<a href=\"index.php?page=$i\">$i</a><button class=\"mdl-button mdl-js-button mdl-button--raised mdl-button--accent\"></button>/";
        }

echo '<p>Nombre de pages :'.$calculPages.'</p>';
{
    //on veut rester sur la page index, mais afficher les messages correspondants aux
    //pages suivantes
    //si la variable page existe bien sinon c'est renvoyer à la page index
    if (isset ($_GET['page']) && $_GET['page']>0 && $_GET['page']<=$calculPages){
        $pageActu = $_GET['page'];
    }
    else {
        $pageActu=1;
    }
    $reponse=$bdd->query("SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT ".(($pageActu-1)*$nb_messages_par_page),".$nb_messages_par_page");
    $donnees=$reponse->fetchAll();
foreach ($donnees as $reponse) {
?>
<table>
    <p><strong>Pseudo : </strong><?php echo $reponse->pseudo;?></p>
    <p><strong>Message : </strong><?php echo $reponse->message;?></p>
    <?php }
    ?>
</table>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<!-- Material Design Light -->
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>
</html>