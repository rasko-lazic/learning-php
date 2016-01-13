

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My projects</title>
  <meta name="description" content="My projects">
  <meta name="author" content="Rasko Lazic">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

 
</head>
<h1>Lista projekata</h1>
<body>

<?php

$dir=scandir('.');
echo "<pre>";                                                                   //defines preformatted text
for($brojac=2;$brojac<count($dir);$brojac++) {
    if($dir[$brojac]!="index.php") {
        ob_start();
        include $dir[$brojac];
        ob_end_clean();
        //echo $dir[$i];
        echo "<a href=/".$dir[$brojac].">".$title."</a><br>";
    }
}
?>
    
</body>
</html>
