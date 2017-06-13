<?php
function nettoyer($chaine) { 
 $chaine = trim($chaine);
 $chaine = strtr($chaine,
"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
"aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
 $chaine = strtr($chaine,"ABCDEFGHIJKLMNOPQRSTUVWXYZ","abcdefghijklmnopqrstuvwxyz");
 $chaine = preg_replace('#([^.a-z0-9]+)#i', '-', $chaine);
        $chaine = preg_replace('#-{2,}#','-',$chaine);
        $chaine = preg_replace('#-$#','',$chaine);
        $chaine = preg_replace('#^-#','',$chaine);
 return $chaine;
}
?>
