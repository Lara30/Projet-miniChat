<!--Récupération des 10 derniers messages!-->
<?php
include ("connect.php");
$reponse=$bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 10');
//Affichage de chaque message (données protégées par htmlspecialchars)

$donnees = $reponse->fetchAll();
foreach ($donnees as $reponse) {
?>
<table>
    <p><strong>Pseudo : </strong><?php echo $reponse->pseudo;?></p>
    <p><strong>Message : </strong><?php echo $reponse->message;?></p>
    <?php }
    ?>
</table>
