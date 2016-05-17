<!DOCTYPE html>
<html>
<body>
<h1>My first PHP page.</h1>

<?php

function myTest() {
    static $x=0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
myTest();
myTest();
?>

</body>
</html>
