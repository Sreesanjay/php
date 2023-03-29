<html>

<body>
    <h2>Fibonacci Series</h2>
    <form action="" method="post">
        Enter the number : 
        <input type="text" name="number" />
        <input type="submit" />
    </form>
</body>

</html>
<?php
if ($_POST) {
    $firstTerm = 0;
    $secondTerm = 1;
    $n = $_POST['number'];
    while ($firstTerm <= $n) {
        echo $firstTerm . "</br>";

        $nextTerm = $firstTerm + $secondTerm;
        $firstTerm = $secondTerm;
        $secondTerm = $nextTerm;
    }
}
?>
