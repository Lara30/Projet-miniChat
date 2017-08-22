<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mini-chat</title>
<!--    pour rafraichir une page automatiquement-->
    <script type="text/javascript">
        window.setTimeout("window.location.reload();",30000);
    </script>
</head>

<body>
<!--Création du formulaire!-->
<form action="minichat_post.php" class="mdl-grid" method="POST">
    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="pseudo" id="pseudo" value="<?php echo $cookiePseudo ?>">
        <label class="mdl-textfield__label" for="sample3">Pseudo : </label>
    </div>
    <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="message" id="message">
        <label class="mdl-textfield__label" for="sample3">Message :</label>
    </div>
    <button id="send" class="mdl-cell mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
        <i class="material-icons">send</i>
    </button>
    <!--Création d'un lien permettant de rafraîchir la page afin de voir la conversation du tchat"!-->
    <a href="javascript:window.location.reload()">Recharger la page</a>
</form>
</body>
</html>