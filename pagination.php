<?php
include ("connect.php");
//Pour commencer ce sciprt, on va compter le nombre de pages
//il faut compter tous les messages contenus
//Une connexion SQL doit être ouverte avant cette ligne...
$messagesparpage=2; //afficher 2 messages par page
$retour_total=mysql_query('SELECT COUNT(*) AS total FROM chat'); //Nous récupérons le contenu de la requête dans $retour_total
$donnees_total=mysql_fetch_assoc($retour_total); //On range le retour sous la forme d'un tableau.
$total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
//maintenant comptons le nbre de pages
$nombredepages=ceil($total/$messagesparpage);
if(isset($_GET['page']))