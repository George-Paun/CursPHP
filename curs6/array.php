<?php
echo 'Recapitulare array';
?>
<h2>2. Ce afiseaza urmatorul script?</h2>
<?php
$a = array(1,2,3,4,5,6,7,8,9);
reset($a);
key($a);
//echo next(next(prev(next($a))));
echo key($a);
?>
<h2>3. Ce afiseaza urmatorul script?</h2>
<?php
$a = array(1,2,3,4,5,6,7,8,9);
reset($a);
next($a);
prev($a);
next($a);
echo next($a);
echo key($a);
?>
<h2>4. Ce afiseaza urmatorul script ? </h2>
<?php
$masini = array("Volvo","BMW","Toyota","DACIA","AUDI");
rsort($masini);
print_r($masini);

 ?>
<h2>7. Ce afiseaza urmatorul script?</h2>
<?php

$cumparaturi = ['1'=>"paine",'2'=>"oua",'3'=>"lapte", '4'=>'masline','5'=>'cadouri'];

uasort($cumparaturi, "dupa_lungime");

function dupa_lungime($e1, $e2){
  return strlen($e1)-strlen($e2);
}

//echo "<pre>";
print_r($cumparaturi);
?>

<h2>8. Ce afiseaza urmatorul script?</h2>
<?php
$tabloul=array("oras"=>"Bucuresti", 10, 89);
$tablou2=array("abac","computer","oras"=>"Braila",4);
$rezultat=array_merge($tablou2, $tabloul);
print_r($rezultat);
 ?>

<h2>Max si min intr-un array</h2>
<?php
function getMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
  
// Returns maximum in array 
function getMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
  
// Driver code 
$array = array(11, 2, 0,3, 14, 5); 
echo(getMax($array)); 
echo "<br>"; 
echo(getMin($array)); 
?> 
