
<!--<html>
    <body>
        <h1>Text input
        <form method="post">
            Input your string: <input type="text" name="string1" placeholder="username"><br>
            Input your string: <input type="password" name="string2" placeholder="password"><br>
            <input type="submit">
        </form>
        <form action="string.php" method="get">
            Input your string: <input type="text" name="string3"><br>
            <input type="submit">
        </form>
    </body>
</html>-->



<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$title="Blog output test";
    $myPDO = new PDO('pgsql:host=localhost;dbname=blogdb', 'postgres', 'newPassword');
    
    //$myPDO->query("INSERT INTO entries (title) values ('blabla')");
    
    $result = $myPDO->query("SELECT title FROM entries");
    echo"<pre>";
    foreach($result as $r) {
        echo $r[0];
    }
echo'<br><br><a href="/learning-php/index.php">Back</a>';
?>



