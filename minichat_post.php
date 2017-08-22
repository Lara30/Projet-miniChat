<?php
include ("connect.php");

$pseudo =$_POST['pseudo'];
$message = $_POST['message'];

$req=$bdd->prepare("INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)");
$req->execute(array (
    'pseudo'=>$pseudo,
    'message'=>$message
));
print_r($bdd->errorInfo());
header("location: index.php");
//while ($donnees=$reponse->fetch()) {
//    echo '<p><strong>'.htmlspecialchars($donnees['pseudo']) .'</strong> :' .htmlspecialchars($donnees['message']) .'</p>';
//}
//$reponse->closeCursor();
?>
