<?php

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
echo <<<END
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

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

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

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="#">New features</a>
          <a class="blog-nav-item" href="#">Press</a>
          <a class="blog-nav-item" href="#">New hires</a>
          <a class="blog-nav-item" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Holistic Agency Blog</h1>
        <p class="lead blog-description">The official programming blog</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
END;

            $blogdb = new PDO('pgsql:host=localhost;dbname=blogdb', 'postgres', 'newPassword');
            $page=0;
            if($_GET["page"]) {
                $page=$_GET["page"];
            }
            
            if($_GET["startdate"]) {
                $startdate=$_GET["startdate"];
                $enddate=$_GET["enddate"];
                echo "$startdate - $enddate<br><br>";
            }
            $titles = $blogdb->query("SELECT title FROM entries LIMIT 2 OFFSET $page*2");
            $dates = $blogdb->query("SELECT to_char(posted_on, 'dd Month YYYY') FROM entries LIMIT 2 OFFSET $page*2");
            $contents= $blogdb->query("SELECT content FROM entries LIMIT 2 OFFSET $page*2");
            $i=0;
            foreach($titles as $title[$i++]) {
                
            }
            $i=0;
            foreach($dates as $date[$i++]) {
                
            }
            echo "<h2 class=\"blog-post-title\">".$title[0][0]."</h2>";
            echo "<p class=\"blog-post-meta\">Posted on: ". $date[0][0] ."</p>";
            $i=0;
            foreach($contents as $content[$i++]) {
                
            }
            echo $content[0][0];
                    
           
          echo "</div><!-- /.blog-post -->";
          echo "<div class=\"blog-post\">";
            echo "<h2 class=\"blog-post-title\">".$title[1][0]."</h2>";
            echo "<p class=\"blog-post-meta\">Posted on: ". $date[1][0] ."</p>";

            echo $content[1][0];

            
          echo"</div><!-- /.blog-post -->";
          
    echo "<nav>
            <ul class=\"pager\">";
            if($page>0) {
              echo"<li><a href=\"index.php?page=". ($page-1) ."\">Previous</a></li>";
              }
              echo "<li><a href=\"index.php?page=". ($page+1) ."\">Next</a></li>
            </ul>
          </nav>";
echo<<<END
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>HolisticAgency je mlada one-man-show agencija koja želi da proširi saradnju sa stranim klijentima i ubrza razvoj sopstvenih aplikacija.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="index.php?startdate=2015-03-01&enddate=2015-03-31">March 2015</a></li>
              <li><a href="index.php?startdate=2015-02-01&enddate=2015-02-28">February 2015</a></li>
              <li><a href="index.php?startdate=2015-01-01&enddate=2015-01-31">January 2015</a></li>
              <li><a href="index.php?startdate=2014-12-01&enddate=2014-12-31">December 2014</a></li>
              <li><a href="index.php?startdate=2014-11-01&enddate=2014-11-30">November 2014</a></li>
              <li><a href="index.php?startdate=2014-10-01&enddate=2014-10-31">October 2014</a></li>
              <li><a href="index.php?startdate=2014-09-01&enddate=2014-09-30">September 2014</a></li>
              <li><a href="index.php?startdate=2014-08-01&enddate=2014-08-31">August 2014</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for Holistic Agency by Rasko Lazic</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


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
