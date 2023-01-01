<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Times tables to 12</title>
</head>

<body>
    <h1>Multiplication tables with PHP</h1>
    <h2>Multiplication table using a while loop. </h2>
    <table width="100%" border="1" align="center">
        <caption fontsize="14">Multiplication tables of 1 to 12 with a "while loop".</caption>
        <tr style="background-color:lightblue">
            <th>Timetable of 1</th>
            <th>Timetable of 2</th>
            <th>Timetable of 3</th>
            <th>Timetable of 4</th>
            <th>Timetable of 5</th>
            <th>Timetable of 6</th>
            <th>Timetable of 7</th>
            <th>Timetable of 8</th>
            <th>Timetable of 9</th>
            <th>Timetable of 10</th>
            <th>Timetable of 11</th>
            <th>Timetable of 12</th>
        </tr>
        <?php 
        #Declare a function with 2 arguments
            function times ($x, $y) {
                #Inside the function, multiply the 2 numbers 
                $tables = $x * $y;
                #and return the result
                return $tables;
            }

            #In the main PHP script, create a variable for the first number
                $x = 1;

                #While the first number is less than 13, repeat the following loop
                while ($x < 13) {
                    #Create another variable for the second number and set table row
                    $y = 1;
                    echo "<tr>";
                    #While the second number is less than 13, repeat the following function
                    while ($y < 13) {
                        $tables = times ($x, $y);
                    #Capture the value returned from the function and print the result
                    echo "<td> $x X $y is: $tables </td>";
                        #Increment the value of the second variable
                        $y++; 
                    }
                    #Increment the value of the first variable and close the table row
                    $x++;
                    echo "</tr>";
                    }	

        ?>
    </table>
    <h2>Multiplication table using a for loop. </h2>
    <table width="100%" border="1" align="center">
        <caption>Multiplication tables of 1 to 12 with a "for loop".</caption>
        <tr style="background-color:lightblue">
            <th>Timetable of 1</th>
            <th>Timetable of 2</th>
            <th>Timetable of 3</th>
            <th>Timetable of 4</th>
            <th>Timetable of 5</th>
            <th>Timetable of 6</th>
            <th>Timetable of 7</th>
            <th>Timetable of 8</th>
            <th>Timetable of 9</th>
            <th>Timetable of 10</th>
            <th>Timetable of 11</th>
            <th>Timetable of 12</th>
        </tr>
        <?php
        $result = "";
            #For each value of i below 13, repeat the following loop
            for ($i = 1; $i < 13 ; $i++) {
                #Open a table row
                echo "<tr>";
                #For each value of n up to 13, repeat the operation and print the results
                for ($n = 1; $n < 13 ; $n++) {
                    $result = $i * $n;
                    #Test results for sauare numbers and print special font
                    if ($result ? $i%$n == 0 && $i==$n: $i%$n !== 0) {
                    echo "<td> <b>$result</b></td>";
                 }else {
                    echo "<td> $result </td>";}
                }
                #Close the table row
                echo "</tr>";

            }
		  
        ?>
    </table>
</body>

</html>