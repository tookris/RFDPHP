<?php

 if (isset($_POST['frminscription'])) {
   $email = checkinput($_POST['email']);
   $pwd = checkinput($_POST['pwd']);

   $erreur = $array();

 }

else {
  require 'frminscription.php';
}
