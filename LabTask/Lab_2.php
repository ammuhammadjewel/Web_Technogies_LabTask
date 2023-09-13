<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <?php

    /// Lab Task 1 Area and Perimeter

    $length = 10;
    $width = 7;

    ///Calculate the area and perimeter
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area of Rectangle = " .$area."<br>";
    echo "Perimeter of Rectangle = " .$perimeter."<br>";
    "<br>";
    
    ///Lab Task 2 Vat calculation 2
    
    $amount = 100;
    $vat_rate = 0.15;

    /// Calculate the VAT
    $vat = $amount * $vat_rate;

    echo "The VAT is" .$vat."<br>";

    /// Given numver is Odd or Even 3

    $number = 7;

    ///Check if the number is divisible by 2
    if ($number % 2 == 0) 
    {
        //if yes, number is even
        echo "The even number is = " . $number . "<br>";
      } 
      else 
      {
        //if no, number is odd
        echo "The Odd number is = " . $number . "<br>";
      }
      


    /// Define the three numbers
    $num1 = 10;
    $num2 = 15;
    $num3 = 12;

    ///Initialize a variable store largest number
    $largest = $num1;

    // Compare the largest number with the second number
    if ($num2 > $largest) 
    {
    // If the second number is larger, update
    $largest = $num2;
    }

    // Compare the largest number with the third number
    if ($num3 > $largest) 
    {
    // If the third number is larger, update
      $largest = $num3;
    }

    echo "The largest number among is " .$largest."<br>";

    ///Lab Task 5 print all the odd numbers between 10 to 100 Hints

    $start = 10;
    $end = 100;

    ///for loop to iterate from the start to the end number
    for ($i = $start; $i <= $end; $i++) {
    /// Check if the current number is odd using the modulo operator (%)
    if ($i % 2 != 0) 
    {
    /// if yes
    echo $i . "  ";
    "<br>";
    }
}

    /// Lab Task 6 search an element from an array

    $array = array(10, 20, 30, 40, 50);

    $element = 30;

    /// Initialize a variable to store the index of the element
    $index = -1;

    /// Use a for loop to iterate over the array elements
    for ($i = 0; $i < count($array); $i++) 
    {
    /// Check if the current element is equal to the element to be searched
    if ($array[$i] == $element) 
    {
        /// if yes, then update the index
        $index = $i;
        break;
    }
}

    /// Display the result using echo statement
    if ($index == -1) 
    {
    /// If the index is -1, then the element is not found in the array
    echo "<br>The element is not found in the array " .$element. "<br>";
    } 
    else 
    {
    /// If the index is not -1, then the element is found at that index
    echo "<br>The element " . $element . " is found at index " . $index . " in the array.<br>";
    }


        /// Lab Task 7 
        /// Lab Task 8

        /// Lab Task 9




        /// Lab Task 10


        function isLeapYear($year) {
            if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
                return true;
            } else {
                return false;
            }
        }
        
        $year = 2024; 
        if (isLeapYear($year)) {
            echo $year . " is a leap year.";
        } else {
            echo $year . " is not a leap year.";
        }

        /// Lab Task 11

        function factorial($number) {
            if ($number < 0) {
                return "Factorial is not defined for negative numbers.";
            } elseif ($number == 0) {
                return 1;
            } else {
                $result = 1;
                for ($i = 1; $i <= $number; $i++) {
                    $result *= $i;
                }
                return $result;
            }
        }
        
        $number = 5; 
        $result = factorial($number);
        echo "The factorial of " . $number . " is: " . $result."<br>";
        

        /// Lab Task 12

        function findLargestNumber($numbers) {
            $largestNumber = $numbers[0];
        
            foreach ($numbers as $number) {
                if ($number > $largestNumber) {
                    $largestNumber = $number;
                }
            }
        
            return $largestNumber;
        }
        
        $numbers = [10, 5, 8, 15, 3, 20];
        
        $largestNumber = findLargestNumber($numbers);
        echo "The largest number in the array is: " . $largestNumber."<br>";
        
        /// Lab Task 13
        function isPrime($number) {
            if ($number < 2) {
                return false;
            }
        
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
        
            return true;
        }
        
        $number = 17; 
        
        if (isPrime($number)) {
            echo "Prime number = " .$number."<br>";
        } else {
            echo "Not a prime number = " .$number."<br>" ;
        }

    ?>
    </body>
</html>