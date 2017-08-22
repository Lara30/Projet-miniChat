<?php
include ("connect.php");
$pseudo=htmlspecialchars($_POST['pseudo']);
$message=htmlspecialchars($_POST['message']);

$req=$bdd->prepare("INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)");
$req->execute(array (
    'pseudo'=>$pseudo,
    'message'=>$message
));
setcookie('pseudo', $_POST['pseudo'], time() + 24*3600, null, null, false, true);

print_r($bdd->errorInfo());
header("location: index.php");
//while ($donnees=$reponse->fetch()) {
//    echo '<p><strong>'.htmlspecialchars($donnees['pseudo']) .'</strong> :' .htmlspecialchars($donnees['message']) .'</p>';
//}
//$reponse->closeCursor();
?>


