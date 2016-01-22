<html>
    <body>
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
</html>




<?php
/*razlike izmedju _POST i _GET[in url]
 * 
 * string[] automatski rasporedjuje u array sa odvojenim indeksima
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$title="String input tests";
//FORMATIRA IZLAZ
//echo "<pre>"; 
//PRINT_R ZA OUTPUT NIZOVA                                                                
//print_r($_POST);                                                              
//echo $_POST["string1"];                       
//VADJENJE ODREDJENIH ELEMENATA STRINGA
echo "First three letters: ".substr($_POST["string1"], 0, 3)."<br><br>";        
echo "Username: ".$_POST["string1"]."<br>";
//POGLEDATI PHP FORM VALIDATION
echo "Password: ";
if($_POST["string2"]!="") {
    //MD5 ENKRIPCIJA
    echo md5($_POST["string2"]);                                                
    }
//FLUSH-UJE $_POST
$_POST=array();                                         
echo "<br> _GET string: ".$_GET["string3"];

//foreach TEST
$fruit=array("apple", "kiwi", "grape");
var_dump($fruit);
foreach($fruit as $fruit) {
    echo "<br>" .$fruit;
}

echo $fruit;

echo'<br><br><a href="/learning-php/index.php">Back</a>';
?>