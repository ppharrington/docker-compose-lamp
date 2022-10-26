<?php
$testTitle="MySQLi Connection test";
include_once 'assets/htmltags.php';
$link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);
echo $headtags;

if (!$link) {
    echo "<h2 class='subtitle no-bottom-margin'>FAILURE</h2><p>Unable to connect to MySQL.</p>" . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    echo $foottags;
    exit;
}

echo "<h2 class='subtitle no-bottom-margin'>SUCCESS</h2><p>Connection to MySQL was made.</p>" . PHP_EOL;

echo $foottags;

mysqli_close($link);
