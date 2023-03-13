<h1>For loop</h1>
<?php
$a=[10,20,39,40,50];
for($i=0;$i<5;$i++){
    echo"$a[$i] <br>";
}      
?>

<h1>foreach</h1>
<?php
$a=[10,20,39,40,50];
foreach($a as $value){
    echo"$value <br>";
}      
?>

<h1>while</h1>
<?php
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<h1>do while</h1>
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>