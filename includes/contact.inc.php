<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkinput($_POST['nom']);
  $prenom = checkinput($_POST['prenom']);
  $mail = checkinput($_POST['mail']);
  $msg = checkinput($_POST['msg']);

$erreur = array();


if ($nom === "")
array_push($erreur, "veuillez saisir votre nom");

if ($prenom === "")
array_push($erreur, "veuillez saisir votre prenom");

if ($mail === "")
array_push($erreur, "veuillez saisir votre mail");

if ($msg === "")
array_push($erreur, "veuillez saisir votre message");


if (count($erreur) > 0) {
  $message = '<ul>';

  for($i = 0 ; $i < count($erreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
  }

  $message .= '</ul>';

  echo $message;

  require 'frmContact.php';

}

else {
    echo "insertion en BDD";
}

}
else {
  $nom = $prenom = $mail = $msg = "";
  require 'frmContact.php';
}
