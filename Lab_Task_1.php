<!DOCTYPE html>
<html>
<head>
    <title>Lab Task 2</title>
</head>

<body>
    <form method="GET">
        <label for="nn">Enter a number: </label>
        <input type="number" id="nn" name="nn" min="1" max="20">
        <input type="submit" value="Submit">
    </form>

    <?php
    $n = $_GET['nn'];
    if ($n != null) {
        echo "<p>You entered the number: $n</p>";
        for ($j = 1; $j <= $n; $j++) {
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 3 == 0) {
                    echo "* ";
                } else {
                    echo $i, " ";
                }
            }
            echo "<br>";
        }
    } else {
        echo "<p>Please enter any number</p>";
    }
    ?>

</body>

</html>