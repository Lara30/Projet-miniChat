<?php
include ("connect.php");
//pour protéger le code afin d'éviter de rentrer du code =htmlspecialchars
$pseudo=htmlspecialchars($_POST['pseudo']);
$message=($_POST['message']);
$message=str_replace(':-)', '<img src="../Projet-miniChat/images.png"/>',$message);
$message=str_replace('héhé', '<img src="../Projet-miniChat/images.jpeg"/>',$message);

//pour insérer dans la table le pseudo et le message avec les valeurs rentrées dans le formulaire
$req=$bdd->prepare("INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)");

$req->execute(array (
    'pseudo'=>$pseudo,
    'message'=>$message
));
//pour le cookie :
setcookie('pseudo', $pseudo, time() + 24*3600, null, null, false, true);

print_r($bdd->errorInfo());
//pour rediriger dans la page index pour l'affichage
header("location: index.php");
//while ($donnees=$reponse->fetch()) {
//    echo '<p><strong>'.htmlspecialchars($donnees['pseudo']) .'</strong> :' .htmlspecialchars($donnees['message']) .'</p>';
//}
//$reponse->closeCursor();
?>
