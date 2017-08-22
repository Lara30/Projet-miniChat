<?php
include ("connect.php");
//pour protéger le code afin d'éviter de rentrer du code =htmlspecialchars
$pseudo=htmlspecialchars($_POST['pseudo']);
$message=htmlspecialchars($_POST['message']);
//on remplace les textes des smileys par les images(ce n'est qu'un exemple pour faire un essai)

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


