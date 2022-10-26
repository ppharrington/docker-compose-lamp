<?php
$testTitle="PDO Connection test";
include 'assets/htmltags.php';
$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = null;

echo $headtags;

try{
    $database = 'mysql:host=database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "<h2 class='subtitle no-bottom-margin'>SUCCESS</h2><p>Connection to MySQL with PDO was made.</p>";    
} catch(PDOException $e) {
    echo "<h2 class='subtitle no-bottom-margin'>FAILURE</h2><p>Unable to connect to MySQL with PDO.</p><p>Error:\n $e</p>";
}

echo $foottags;
$pdo = null;