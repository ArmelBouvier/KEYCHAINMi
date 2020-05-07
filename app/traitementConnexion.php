<?php
//password_hash($mdp,PASSWORD_BCRYPT);
//echo password_hash('000000', PASSWORD_BCRYPT);
$dbh = new PDO('mysql:host=localhost;dbname=ajax;charset=utf8','root', '');

$req = $dbh->prepare('SELECT * FROM user WHERE email = :email');
$req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$req->execute();
$user = $req->fetch(PDO::FETCH_OBJ);
if($user){
	if(password_verify($_POST['password'], $user->password)){
		echo json_encode($user);
	}
}else{
	echo json_encode('Erreur : identifiant incorrect');
}