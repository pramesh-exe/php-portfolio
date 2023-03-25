<?php
echo "Pramesh Shrestha<br>";
echo "77297983";
echo "<h2>Using Escape Characters</h2>";
echo "\"most programmers say it's better to use 'echo' rather than 'print'\" says who?";
echo "<h2>Variables</h2>";
$name = 'Pramesh';
$age = 21;
echo 'Hi my name is '.$name.' and I am '.$age.' years old.'.'<br>';
echo "Mi nombre es $name y tengo $age anos de edad.";
echo "<h2>Functions</h2>";
//gettype()returns type of variable
echo gettype($name);
echo '<br />';
//strlen() returns length of string
echo strlen($name);
echo '<br />';
//strtoUpper()returns string in uppercase
echo strtoUpper($name);
echo "<h2>Arithmetic</h2>";
$num1 = 9;
$num2 = 12;
echo "num1 = $num1<br>";
echo "num2 = $num2<br>";
echo "num1 x num2 = ".$num1*$num2."<br>";
echo "num1 as a percentage of num2 = ". 100*$num1/$num2."%<br>";
echo "num2 divided by num1 = ".floor($num2/$num1)." remainder ".$num2%$num1."<br>";
echo '<br>';
$height = 1.83;
$inches = $height*100/2.54;
echo "<b>Name: $name</b><br>";
echo '<br>';
echo "<b>Age: $age</b><br>";
echo '<br>';
echo "<b>Height in Meters: ".number_format($height,1)."</b><br>";
echo '<br>';
echo "<b>Height in Feet and inches: ". floor($inches/12)."ft ".$inches%12 ."ins</b>";
echo '<br>';
echo'<a href="../watIndex.html">Go back to Portfolio</a>';
?>