<!-- #BOOTSTRAP -->



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog de naivo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <br><br><br><br>

		 
		 <?php include('p07.php'); ?>

          <!-- Templating en une ligne, plus propre et permet décrire du HTML plus facilemenent -->
          <?php foreach ($articles as $articles) : ?>
    
    		<div class="col-xs-6 col-lg-4">
              	
				<h2><?php echo $article['title'] ?></h2> <!-- Les 2 notations se valent -->
              <p><?= $article['content'] ?></p>

              <p><a class="btn btn-default" href="#" role="button">Lire plus &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

         <?php endforeach; ?>
          
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; 2017 Company, Inc.</p>
      </footer>

    </div><!--/.container-->


  </body>
</html>