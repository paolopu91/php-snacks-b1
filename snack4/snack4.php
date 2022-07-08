<!-- 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->
 <?php


//for cicle
for($i = 0 ; $i < 15 ; $i++){
$randomNumber[] = rand(1,100);
}
var_dump($randomNumber);
 ?>