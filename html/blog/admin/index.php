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
      </head>

  <body>
            <h1>Admin section</h1>
            <table class="table"> 
<!--<caption>Table of posts</caption>-->
    
END;
                $blogdb = new PDO('pgsql:host=localhost;dbname=blogdb', 'postgres', 'newPassword');
                if(isset($_GET["post_id"])) {
                    
                    $post_id=$_GET["post_id"];
                    $posts=$blogdb->prepare("SELECT title,content FROM entries WHERE text_id=:post_id");
                    $posts->bindParam(':post_id', $post_id);
                    $posts->execute();
                    $post=$posts->fetch(PDO::FETCH_BOTH);
                    
                    
            echo "<form method=\"post\" >
            <input type=\"text\" name=\"title\" value=\"".$post[0]."\"><br>
            <textarea class=\"form-control\" cols= \"150\" rows=\"40\"> ".$post[1]."></textarea><br><br><br>
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
  
                
               




