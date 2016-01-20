<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
            
echo<<<END
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/blog.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
            <div class="container">
            <h1><br>blog/user:Admin<br><br></h1>
            <table class="table"> 
END;
$blogdb = new PDO('pgsql:host=localhost;dbname=blogdb', 'postgres', 'newPassword');
if(isset($_GET["post_id"])) {
    $post_id=$_GET["post_id"];
    $posts=$blogdb->prepare("SELECT title,content FROM entries WHERE text_id=:post_id");
    $posts->bindParam(':post_id', $post_id);
    $posts->execute();
    $post=$posts->fetch(PDO::FETCH_BOTH);
    echo "<form method=\"post\" >
    Title<textarea class=\"form-control\" name=\"title\" cols= \"40\" rows=\"1\">" .$post[0]. "</textarea><br><br>
    Content<textarea class=\"form-control\" name=\"content\" cols= \"150\" rows=\"40\">" .$post[1]. "</textarea><br><br><br>
    <input type=\"submit\">
    </form><br><br>";
    echo "<a href=\"/blog/admin/index.php\">Back</a>";
}
else {  
    $page=0;
    $posts=$blogdb->prepare("SELECT * FROM entries ORDER BY (text_id) LIMIT 10 OFFSET :page*10");
    $posts->bindParam(':page', $page);
    $posts->execute();
    echo<<<END
    <thead> 
    <tr> 
    <th>Post id</th> 
    <th>Title</th> 
    <th>Posted on</th> 
    </tr> 
    </thead> 
    <tbody> 
END;
    foreach($posts as $post) {
        echo  " <tr> 
        <th scope=\"row\">". $post["text_id"]."</th> 
        <td>".$post["title"]."</td> 
        <td>".$post["posted_on"]."</td> 
        <td><a href=\"/blog/admin/index.php?post_id=".$post["text_id"]."\">Edit</a></td>
        </tr>";
    }
    echo" </tbody> </table>";
}
echo<<<END
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
END;
  
                
               




