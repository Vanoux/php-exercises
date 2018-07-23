<?php
/*Faire une fonction qui prend en paramètre deux nombres.
La fonction doit retourner :

    Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    Les deux nombres sont identiques si les deux nombres sont égaux

*/
function compare($nb1, $nb2){
  if ($nb1 > $nb2){
      return $nb1 . " est plus grand que " . $nb2 . "\n";
  } elseif ($nb1 < $nb2){
      return $nb1 . " est plus petit que " . $nb2 . "\n";
  } else {
      return $nb1 . " est indentique à " . $nb2 . "\n";
  }
}
echo compare(10, 2);
echo compare(5, 9);
echo compare(4, 4);
?>