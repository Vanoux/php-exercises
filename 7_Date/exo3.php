<?php
//setLocale() pour formater des dates dans d'autres langues
setLocale(LC_TIME, 'fr_FR.utf8', 'fra');
//strftime() Formate une date/heure locale avec la configuration locale
echo "Nous sommes le : " . (strftime("%A %d %B"));
?>