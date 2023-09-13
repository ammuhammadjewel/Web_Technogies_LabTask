<!DOCTYPE html>
<html>
    <head>
        <body>
            <?php
            function isLeapYear($year) {
                if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
                    return true;
                } else {
                    return false;
                }
            }
            
            $year = 2024; // Modify the value of $year as per your requirement
            
            if (isLeapYear($year)) {
                echo $year . " is a leap year.";
            } else {
                echo $year . " is not a leap year.";
            }
            
            ?>
        </body>
    </head>
</html>