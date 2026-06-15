<!DOCTYPE html>
<html>
    <head>
        <title>Activity_04</title>
    </head>
    <body>

    <?php
    if (isset($_POST["btnSubmit"])) {

        $num1 = $_POST["txtNum1"];
        $num2 = $_POST["txtNum2"];
        $operation = $_POST["operation"];

        echo "<h3>Results</h3>";

        if($operation == '+'){
            echo "The sum of " . $num1 . " and " . $num2 . " is " . ($num1 + $num2) . "<br>";
        }
        else if($operation == '-'){
            echo "The difference of " . $num1 . " and " . $num2 . " is " . ($num1 - $num2) . "<br>";
        }
        else if($operation == '*'){
            echo "The product of " . $num1 . " and " . $num2 . " is " . ($num1 * $num2) . "<br>";
        }
        else if($operation == '/'){
             if ($num2 != 0) {
            echo "The quotient of " . $num1 . " and " . $num2 . " is " . ($num1 / $num2) . "<br>";
            } else {
                echo "Division: Cannot divide by zero.<br>";
            }
        }
        else{
            echo "INVALID OPERATION!" . "<br>";
        }

        echo "<br><a href='activity_04.php'>Back</a>";

    } else {
    ?>
    <form method="post" action="activity_04.php">
        <label>Enter First Number</label><br>
        <input type="number" name="txtNum1" required><br><br>

        <label>Enter Second Number</label><br>
        <input type="number" name="txtNum2" required><br><br>

        <label>Operation (+, -, *, /)</label><br>
        <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="+">*</option>
                <option value="-">/</option>
        </select><br><br>
        <input type="submit" name="btnSubmit" value="Calculate">
    </form>
    <?php
    }
    ?>

    </body>
</html>