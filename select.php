<!--Récupération des....  derniers messages!-->
<?php
include ("connect.php");
//là on dit quand on commence et le nombre que l'on veut qu'il apparaisse c'est notre limite
$reponse=$bdd->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 5');
//Affichage de chaque message (données protégées par htmlspecialchars)
$donnees=$reponse->fetchAll();
foreach ($donnees as $reponse) {
?>
<table>
    <p><strong>Pseudo : </strong><?php echo $reponse->pseudo;?></p>
    <p><strong>Message : </strong><?php echo $reponse->message;?></p>
    <?php }
    ?>
</table>
