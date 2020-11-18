<?php
echo "<h1>1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
hyphen(-) at the starting and ending position.:";
echo "<br> <br>";
for($i = 1; $i <= 10; $i++){
  if($i < 10){
    echo $i . '-';
  }else{
    echo $i;
  }
}
echo "<hr>";

echo "<h1>2- Create a script using a for loop to add all the integers between 0 and 30 and
display the total.:";
echo "<br> <br>";
$x =0;
for($i = 0 ; $i <= 30; $i++){
 $x +=$i;
}
echo $x;

echo "<hr>";

echo "<h1>3c- Create a script to construct the following pattern, using nested for loop:";
echo "<br> <br>";
 for($x = 1; $x <= 5; $x++){ 
   for($i = 'A'; $i <= 'E'; $i++){
     echo str_repeat("A", 5 - $x) . str_repeat($i, $x) . "<br>";
     if($x++ > $x){
     break;
    }
      }
    }
    echo "<hr>";

    echo "<h1>3b- Create a script to construct the following pattern, using nested for loop.:";
    echo "<br> <br>";

    for($x = 1; $x <= 5; $x++){ 
      for($i = '1'; $i <= '5'; $i++){
        echo str_repeat("1", 5 - $x) . str_repeat($i, $x) . "<br>";
        if($x++ > $x){
        break;
       }
         }
       }

       echo "<hr>";

       echo "<h1>4- Create a script to construct the following pattern, using a nested for loop:";
    echo "<br> <br>";

    for($x = 5; $x >= 1; $x--){ 
      for($i = '1'; $i <= '5'; $i++){
        echo str_repeat(0, 5 - $x).$i . str_repeat(0, 5-$i) . "<br>";
        if($x-- < $x){
        break;
       }
         }
       }
       echo "<hr>";

       echo "<h1>5- Write a program to calculate and print the factorial of a number using a for
       loop. The factorial of a number is the product of all integers up to and including
       that number, so the factorial of 5 is 5*4*3*2*1= 120:";
       echo "<br> <br>";

       ///////////////////////

       echo "<hr>";

       echo "<h1>6- Write a program to calculate and print the Fibonacci sequence using a for loop.
       Fibonacci is a series of numbers where a number is the sum of previous two
       numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
       so on:";
       echo "<br> <br>";

       $i=0;
       $x=0;
       $y = 0;
    
       while ($i<=5) {
       $i++;
      
       while ($y<=5){
        $x+=$i; // 1 - 3
        echo $x.'<br>'; // 1 - 3
        $i+=$x; // 2 - 5
        echo $i.'<br>'; // 2 - 5
        $y++;
    }  
    }

    echo "<hr>";

    echo "<h1>7- Write a program which will count the c characters in the text
    OrangeAcademy:";
    echo "<br> <br>";

    
      echo "<hr>";

    echo "<h1>8- Write a PHP script that creates the following table using for loops. Add cellpadding= 3px and cellspacing= 0px to the table tag:";
    echo "<br> <br>";
?>
    <table border="3">
    <?php
    
    $rr =6;
    for($row=1 ; $row <=6 ; $row++){
        echo "<tr>";
        for($nu = 1 ;$nu <=6; $nu++){
            $nu1 = $nu * $row;
            echo "<td>$nu * $row = $nu1 </td>"; 
        }
        echo "</tr>"; 
    }
    
    echo "<hr>";
    ?>
    </table>
    <?php

      echo "<hr>";

      echo "<h1>9- Write a PHP script using nested for loop that creates a chess board as shown
      below:";
      echo "<br> <br>";
  
        //////////////////////

    echo "<hr>";

    echo "<h1>10- Write a PHP script that creates the following table (use for loops):";
    echo "<br> <br>";
    
?>
    <table border="3">
<?php
echo "<hr>";
for($i10=1; $i10 <=10 ; $i10++){
    echo "<tr>";
    for($x10=1; $x10 <=10 ; $x10++){
        $y10= $x10 * $i10 ;
        echo "<td> $y10 </td> ";
    }
    echo "</tr>";
}

?>
</table>

  <?php
    echo "<hr>";

    echo "<h1>11- Write a PHP program which iterates the integers from 1 to 50. For multiples of three print Fizz instead of the number and for the multiples of five print Buzz.
    For numbers which are multiples of both three and five print FizzBuzz:";
    echo "<br> <br>";

    for($i11=1 ; $i11<=50 ; $i11++ ){
      if ($i11 % 3 == 0 && $i11 % 5 == 0 ){
          echo $i11  . "FizzBuzz" ."<br>";
      }
      elseif ($i11 % 3 == 0 ){
          echo $i11  . "Fizz" ."<br>";
      } 
      elseif ($i11 % 5 == 0 ){
          echo $i11  . "Buzz" ."<br>";
      }
      else {
          echo $i11 ."<br>";}
  }

  echo "<hr>";

  echo "<h1>12- Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows):";
  echo "<br> <br>";

  $n = 5; 
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     echo $count . " ";
     $count++;
   } 
	echo "<br>";
   }
?>