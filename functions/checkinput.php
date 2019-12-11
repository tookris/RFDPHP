<?php

function checkinput($chaine){
return addslashes(htmlspecialchars(urldecode(trim($chaine))));
  
}
