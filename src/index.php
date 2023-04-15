<?php
// autoload class
spl_autoload_register('myAutoLoader');

function myAutoLoader($class)
{
    $path="./classes/";
    $extension=".php";
    $fullPath=$path . $class . $extension;
    include_once($fullPath);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ADVANCED</title>
</head>
<body>
    <!-- task 1 -->
    <h1>1. AUTOLOAD</h1>
    <?php  
    $area= new Area(2,3);
    echo "The Area is "; 
    echo $area->calc_area();
    echo "<br>----------<br>";
    $peri= new Perimeter(2,3);
    echo "The Perimeter is ";
    echo $peri->calc_peri();
    echo "<br>";
    ?>
    <hr>
    <!-- task 2 -->
    <h1>2. FILE HANDLING</h1>
    <?php
    $conn= new mysqli('mysql-server','root','secret','myLogs');
    if($conn->connect_error)
    {
        echo $conn->connect_error;
    }
    else{
        date_default_timezone_set('Asia/Calcutta');
        error_log('['.date("d.m/Y h:i:sa").']'." "."\n",3,"./log/db.log");
    }
    
    ?>
    <a href="./log/db.log">Click to see logs</a>
    <hr>
    <!-- task 4 -->
    <h1>4. TOKENS</h1>
    <a href="task4.php">Click me</a>
    <hr>
    <!-- task 3 -->
    <h1>3. active records</h1>
    <a href="task3.php">Click me</a>
    <hr>
      <!-- task 5 -->
      <h1>5.mvc with  active records</h1>
    <a href="https://github.com/vaibhav2569/mvc_login_register">Github</a>
    <hr>
    <!-- task 7 -->
    <h1>7. AJAX</h1>
    <a href="task7.php">Click me</a>
    <hr>
    <!-- task 6 -->
    <h1>6. cookies</h1>
    <a href="task6.php">Click me</a>
    <hr>
    <!-- task 8 -->
    <h1>8.ADVANCED FILTER</h1>
    <a href="task8.php">Click me</a>
    <hr>
    <!-- task 9 -->
    <h1>9.CURRENCY CONVERTER</h1>
    <a href="task9.php">Click me</a>
    <hr>
    <!-- task 10 -->
    <h1>10.ADVANCED ARRAY</h1>
    <a href="task10.php">Click me</a>
    <hr>
   
</html>