<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
  echo "Je viens du formulaire";
}

else {
  echo "Je viens du futur";
}

require 'frmContact.php';
