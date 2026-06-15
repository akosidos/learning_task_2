<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>

    <h2> Calculator</h2>

    <?php
    if (isset($_POST["btnSubmit"])) {
        $num1 = $_POST["txtNum1"];
        $num2 = $_POST["txtNum2"];

        echo "<p>hello world</p>";
    } else{
    ?>

    <form method="post" action="">
        <label>Enter First Number</label><br>
        <input type="number" name="txtNum1" required><br><br>

        <label>Enter Second Number</label><br>
        <input type="number" name="txtNum2" required><br><br>

        <input type="submit" name="btnSubmit" value="Calculate">
    </form>
    <?php } ?>
    </body>
</html>