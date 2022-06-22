<!doctype html>
<html>
	
<head>
    <meta charset="utf-8">
    <title>Page qui reçoit les informations du formulaire !</title>
</head>
<body>



<?php 
//mon code php est entre ces 2 balises
echo "echo affiche le message entre guillemet, concaténation possible <br>";
//en php les . concatène les strings
$messagedumail="Le message de ".$_GET['inputname']." son mail : ".$_GET["formemail"]. " son message est : ". $_GET['message'];
$retour = mail('allison-moya-hernandez@live.fr', 'Objet du message', $messagedumail, 'From : allison-moya-hernandez@live.fr');
//la valeur de retour de la fonction mail est 1 si tout ok
if ($retour) {
    echo "mon mail a bien été envoyé";
} else {
    echo "mon mail a eu un pb et n'a pas pu etre envoyé !!!";
}
?>

 

</body>

</html>