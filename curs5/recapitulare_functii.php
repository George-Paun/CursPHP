<?php
//6
//Functii supraîncarcate (overloading) in PHP
function myTest()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs \n";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "\n";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "\n";
    }
}

myTest(1, 2, 3, 4);
//10
// declare(strict_types=1); // strict requirement
function addNumbers(int $a, int $b, bool $printSum): int {
	$sum = $a + $b;
	if ($printSum) {
 		echo 'The sum is ' . $sum;
	}
 	return $sum;
}
$suma = addNumbers(1, '2', true);
echo $suma;
//a
// $x ** $y  x la puterea y
function putere(int $x, int $n){
    if(($x==0)&&($n>0)) return 0;
    if(($x>0) &&($n==0)) return 1;
    if(($x>0) &&($n>0)) return $x*putere($x,$n-1);

}

echo putere(3,2);
echo putere(2,10);

//b
function drawTags($tname,$style,$content,$count=1)
{
for($i=0;$i<$count;$i++)
echo "<" . $tname . " style='" . $style . "' >" . $content
. "</" . $tname . ">";
}
drawTags("div","border: 1px solid red; background-color:
yellow; color: red; margin: 4px; padding: 4px;","Salut",2);


function sah($nrlinii=8, $nrcoloane=8, $alb='white', $negru='black'){
	echo "<table border=1 cellspacing=1 cellpadding=0>";
	for($l = 1; $l <= $nrlinii; $l++){
		echo "<tr>";
		for($c = 1; $c <= $nrcoloane; $c++){
			$culoare = (($l + $c) % 2 ? $alb : $negru);
			echo "<td bgcolor=$culoare width=30 height=30></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
sah(4,4,'magenta','green');
sah(15,15,'magenta','yellow');
//pom de craciun
$levels = 5;
for($i=0;$i<$levels;$i++){
        for($j=0;$j<floor(($levels-$i));$j++)
                echo "&nbsp;&nbsp;";
        for($j=0;$j<(2*$i)-1;$j++)
                echo "*";

        echo "<br />";
}


 ?>

<script type="text/javascript">
 var a=40,b=8,c=13,o="<div style='font-family:monospace;text-align:center;color:#094'>",w=1,x=0,y="|#|<br>";for(i=1;i<a;i++){for(j=0;j<w;j++){x%c==0?o+="<span style='color:#D00'>O</span>":o+="+";x++;}i%b==0?w-=4:w+=2;o+="<br>";}document.write(o+"<span style='color:#640'>"+y+y+y+"</span></div>");
</script>


<pre>
<?php
$height=25;
$d=1;
$b=($height-1)*2+1;
$f=$b;
$e=floor($b/2);
$a=str_pad('',$b);
while($b>=1){
if ($b==($height-1)*2+1){
$a=substr_replace($a,'*',$e,1);
echo"$a<br>";
$a=substr_replace($a,' ',$e,1);
}
else {
$e=floor($b/2);
$a=substr_replace($a,'*',$e,1);
$a=substr_replace($a,'*',$f-$e-1,1);
echo"$a<br>";
$a=str_pad('',$f);}
$b-=2;
}
?></pre>

<?php

//sortarea BUBBLESORT
function bubblesort($data) {
    $data_length = count($data);
    for ($i=0; $i<$data_length; $i++) {
        for ($j=0; $j<$data_length-1-$i; $j++) {
            if ($data[$j+1] < $data[$j]) {
                $data = swappositions($data, $j, $j+1);
            }
        }
    }
    return $data;
}
function swappositions($data, $left, $right) {
    $backup_old_data_right_value = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backup_old_data_right_value;
    return $data;
}


$data = array(8,4,1,9,5,7,3,2,6,0);
$data = bubblesort($data);
print_r($data);

//Metoda QUICKSORT
$unsorted = array(43,21,2,1,9,24,2,99,23,8,7,114,92,5);

function quick_sort($array)
{
	$length = count($array);
	if($length <= 1){
		return $array;
	}
	else{

		/* selectati un element ca punct de pornire (pivot), deoarece lista este
		 nesortata prima pozitie este cea mai la indemana
		 */
		$pivot = $array[0];
		// generam doua arra-uri in care vom pune valori
		$left = $right = array();
		// comparam fiecare element cu primul si punem in unul din cele 2 array-uri 	$left , $right
		for($i = 1; $i < $length; $i++)
		{
			if($array[$i] < $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}

		/* mai intai folosim metoda recursiva pentru a sorta $left , $right
		 si apoi cu merge  reunim valorile ordonate
		 */
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}

$sorted = quick_sort($unsorted);
print_r($sorted);



?>
