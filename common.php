<?php function top() { ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="fb.js"></script>
    
    <title>UW ACMW</title>
  </head>

  <body>
    <header>
      <div class="inner">
        <h1>UW ACMW</h1>
        <h2>networking for women in cse</h2>
        <a href="https://www.facebook.com/uwacmw" class="button"><small>Follow us on</small>Facebook</a>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="elections.php">Elections</a></li>
          <li><a href="resources.php">Typical Events &amp; Resources</a></li>
        </ul>
      </div>
    </header>

    <div id="content-wrapper">
      <div class="inner clearfix">
<?php } 

function bottom() { ?>
		<aside id="sidebar">
		  <h3>Upcomming Events</h3>
		  <div id="upcommingEvents">
		  </div>
		  <p>Join us by <a href="https://mailman.cs.washington.edu/mailman/listinfo/acm-w">subscribing to our mailing list</a> to stay up to date with current events.</p>
		</aside>
      </div>
    </div>
  </body>
</html>
<?php } ?>