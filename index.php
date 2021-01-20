<?php 
// Q1: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no
// hyphen(-) at the starting and ending position.
// Expected Output: 1-2-3-4-5-6-7-8-9-10
for($i = 1; $i <= 10; $i++) {
    if($i == 1) {
        echo $i;
    } else {
        echo " - ".$i;
    }
}
echo "<br><hr>";
//Q2 :  Create a script using a for loop to add all the integers between 0 and 30 and display the total.
// Expected Output = total as a number
$sumNums = 0;
for($i = 0; $i <= 30; $i++) {
    $sumNums += $i;
}
echo "Total = ".$sumNums;
echo "<br>";
var_dump($sumNums);
echo "<br><hr>";

//Q3: Create a script to construct the following pattern, using nested for loop.
// A A A A A
// A A A B B
// A A C C C
// A D D D D
// E E E E E
$l = range('A', 'E');    
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 4; $j++) {
        if($i + $j <=5) {
            echo " ".$l[0]." ";
        }
    }
    for($k = 0; $k <= $i -1; $k++) {
        echo " ".$l[$i-1]." ";
    }
    echo "<br>";
}
echo "<hr>";

//Q4: 3b. Create a script to construct the following pattern, using nested for loop.
// 1 1 1 1 1
// 1 1 1 2 2
// 1 1 3 3 3
// 1 4 4 4 4
// 5 5 5 5 5
$n = range(1, 5);    
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 4; $j++) {
        if($i + $j <=5) {
            echo " ".$n[0]." ";
        }
    }
    for($k = 0; $k <= $i -1; $k++) {
        echo " ".$n[$i-1]." ";
    }
    echo "<br>";
}
echo "<hr>";

// Q5. Create a script to construct the following pattern, using a nested for loop.
// 1 0 0 0 0
// 0 2 0 0 0
// 0 0 3 0 0
// 0 0 0 4 0
// 0 0 0 0 5
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
        if($i == $j ) {
            echo " ".$i." ";
        }else {
            echo " 0 ";
        }
    }
    echo "<br>";
}
echo "<hr>";

// Q6. Write a program to calculate and print the factorial of a number using a for
// loop. The factorial of a number is the product of all integers up to and including
// that number, so the factorial of 5 is 5*4*3*2*1= 120.
function factorialNum($num) {
    $result = 1;
    for($i = $num; $i >= 1; $i--) {
        $result *= $i;
    }
    echo $num."! =".$result;
}
factorialNum(5);
echo "<hr>";
//Q7. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two
// numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and
// so on.
$fibSeq = array();
$fibSeq[0] = 0;
$fibSeq[1] = 1;
echo $fibSeq[0].", ".$fibSeq[1].", ";
for($i = 2; $i <= 8; $i++) {
    $fibSeq[$i] = $fibSeq[$i - 1] + $fibSeq[$i - 2];
    echo $fibSeq[$i].", ";
}
echo "<br>";
echo array_sum($fibSeq);
echo "<hr>";

//Q8. Write a program which will count the "c" characters in the text "OrangeAcademy".
$count = 0;
$text = "OrangeAcademy";
$char = "c";
for($i = 0; $i < strlen($text); $i++) {
    if(substr($text, $i, 1) == $char) {
        $count += 1;
    }
}
echo $count."<hr>";

//Q9. Write a PHP script that creates the following table using for loops. Add
// cellpadding="3px" and cellspacing="0px" to the table tag.
echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='3px' and cellspacing='0px'><tbody>";
    for($i = 1; $i <=6; $i++) {
        echo "<tr>";
        for($j = 1; $j <=5; $j++) {

            echo "<td style='border: 1px solid black;'>".$i. " * ".$j." = ".$i *$j."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
echo "<hr>";

//Q10: Write a PHP script using nested for loop that creates a chess board.
// Use table width="270px" and take 30px as cell height and width
echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='3px' and cellspacing='0px' width='270px';><tbody>";
    for($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for($j = 1; $j <= 8; $j++) {
            if(($i + $j) % 2 == 0) {
                echo "<td style='background-color: #000; width: 30px; height: 30px'></td>";
            } else {
                echo "<td style='background-color: #fff; width: 30px; height: 30px'></td>";
            }
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
echo "<hr>";

//Q11:
echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='3px' and cellspacing='0px' width='270px';><tbody>";
    for($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for($j = 1; $j <= 10; $j++) {
            echo "<td style='border: 1px solid black; width: 10px; height: 10px'>".$i * $j."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
echo "<hr>";

//Q12. Write a PHP program which iterates the integers from 1 to 50. For multiples of
// three print "Fizz" instead of the number and for the multiples of five print "Buzz".
// For numbers which are multiples of both three and five print "FizzBuzz".
for($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz"."<br>";
    } elseif($i % 3 == 0) {
        echo "Fizz"."<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz"."<br>";
    }
}
echo "<hr>";

//Q13.Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).
function getFloydTriangle($n) {
    $lin = 1;
    for($i = $n; $i > 0; $i--) {
        for($j = $n; $j >= $i; $j--) {
            echo $lin." ";
            $lin++;
        }
        echo "<br>";
    }
}
getFloydTriangle(5);
echo "<br>";
getFloydTriangle(11);
echo "<hr>";

//Q14.Write a PHP program to print alphabet pattern 'A'.
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 7; $j++) {
        if(($i == 1 && $j == 4) || 
        ($i == 2 && ($j == 3 || $j == 5)) || 
        ($i == 3 && ($j >= 2 && $j <= 5)) || 
        (($i >= 4)&& ($j == 1 || $j == 7))) {
            echo " * ";
        }else {
            echo " &nbsp; ";
        }
    }
    echo "<br>";
}
echo "<hr>";

//Q15. Write a PHP program to print alphabet pattern 'B'.
for($i = 1; $i <= 7; $i++) {
    for($j = 1; $j <= 5; $j++) {
        if(($i == 1 || $i == 4 || $i == 7) || 
        ((($i > 1 && $i < 4) || ($i > 3 && $i < 7)) && ($j == 1 || $j == 5))) {
            echo " * ";
        }else {
            echo str_repeat(" &nbsp; ", 2);
        }
    }
    echo "<br>";
}
echo "<hr>";

//Q16. Write a PHP program to print alphabet pattern 'C'
for($i = 1; $i <= 7; $i++) {
    for($j = 1; $j <= 5; $j++) {
        if(($i == 1 || $i == 7) || 
        ((($i == 2 || $i == 6) && ($j == 1 || $j == 5))) || 
        (($i > 2 && $i < 6) && $j == 1)) {
            echo " * ";
        }else {
            echo str_repeat(" &nbsp; ", 2);
        }
    }
    echo "<br>";
}
echo "<hr>";

//Q17. Write a PHP program to print alphabet pattern.
$L =  range('A', 'E');
for($i = 1; $i <= 5; $i++) {  
    for($j = 5; $j >= $i; $j--) {  
        echo "&nbsp;";  
    }  
    for($j = 0; $j < $i; $j++) {  
        echo " ".$L[$j]." ";  
    }  
    echo "<br>";  
}	  
for($i = 4; $i >= 1; $i--) {  
    for($j = 5; $j >= $i; $j--){  
        echo "&nbsp";  
    }  
	for($j = 0; $j < $i; $j++){  
	    echo " ".$L[$j]." "; 
	}  
    echo "<br>"; 
}
?>