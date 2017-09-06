<?php
include("connect.php");
//Pour compter le nombre d'enregistrements = COUNT, là on a sélectionné l'id
//afin d'avoir le compte des entrées on compte l'id
//l'id ne parlant pas trop je lui donne l'allias (AS) nb-mess qui est plus parlant

$totalMessages=$bdd->query("SELECT COUNT(id) AS nb_mess FROM chat");

$data=$totalMessages->fetchAll();
//essai :
//$nb_mess=$data['nb_mess'];

foreach ($data as $valeur) {
    echo '<p>Nombre de messages sur le chat :'.$valeur->nb_mess.'</p>';
}
//on déclare la variable en disant que l'on veut que 5 messages/page
$nb_messages_par_page=5;
//la variable nbrePages doit tenir compte du nombre de messages postés
$nbrePages=$valeur->nb_mess;
//on calcule ainsi le nombre de pages (en tenant compte du nombre des messages postés et
//de leur affichage par page
$calculPages=ceil($nbrePages/$nb_messages_par_page);
echo '<p>Nombre de pages :'.$calculPages.'</p>';
{
    ?>
    <!--on veut rester sur la page index, mais afficher les messages correspondants aux
    //pages suivantes
    <a href="index.php?page=$i"><button class="mdl-button-"</a>
    !-->
    <?php
    //si la variable page existe bien sinon c'est renvoyer à la page index
    if (isset ($_GET['page'])) && $_GET['page']>0 && $_GET['page']<=$nbrePages {
        $pageActu=$_GET['page'];
    }
    else {
        $pageActu=1;
    }
    $bdd="SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0,5".(($pageActu-1)*$calculPages).",$calculPages";
    for($i=1; $i<=$calculPages+1; $i++) {
        if ($i == $pageActu) {
            echo "$i /";
        }
        else {
            echo "<a href=\"index.php?page=$i\">$i</a> /";
        }
    }
        ?>