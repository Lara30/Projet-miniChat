<?php
include("connect.php");
//Pour afficher le compteur de messages postés
$countMessages=$bdd->query("SELECT COUNT(id) AS messages FROM chat");

$requete=$countMessages->fetchAll();
foreach ($requete as $valeur) {
    echo '<p>Nombre de messages sur le chat :'.$valeur->messages.'</p>';
}
//on déclare la variable en disant que l'on veut que 5 messages/page
$messagesparpage=5;
//la variable nbrePages doit tenir compte du nombre de messages postés
$nbrePages=$valeur->messages;
//on calcule ainsi le nombre de pages (en tenant compte du nombre des messages postés et
//de leur affichage par page
$calcul=ceil($nbrePages/$messagesparpage);
echo '<p>Nombre de pages :'.$calcul.'</p>';
for($i=1; $i<$calcul+1; $i++)
{
    ?>
    <a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
    <?php
}
?>

    </div>
<?php
$reponse->closeCursor();
?>