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

echo'<br><br><a href="/index.php">Back</a>';
?>