<?php

include 'libs/database.php';
include 'libs/config.php';
include 'functions.php';
//creat new obj database
$db = new database();

if(isset($_GET['id'])){
	
	$id=$_GET['id'];
	
  $query ="SELECT * FROM posts where category='$id' ";

   $posts=$db->select($query);
   // end qury readmore data 
   //$row=$posts->fetch_array();
}
   
?>

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

    <title>Php Blog in OOP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="indux.php">Home</a>
          <a class="blog-nav-item" href="post.php">ALL Post</a>
          <a class="blog-nav-item" href="Services.php">Services</a>
          <a class="blog-nav-item" href="About.php">About Us</a>
          <a class="blog-nav-item" href="contact.php">Contact</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Php Blog</h1>
        <p class="lead blog-description">The basic template of creating a blog with Php.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
		<?php 
		
		while( $row = $posts-> fetch_array() ) : 
		
		?>

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row ['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatdate($row ['date']); ?>by<a href="#">
			<?php echo $row ['author']; ?></a></p>

            <p><?php echo substr($row ['content'],0,300); ?></p>
			<a class="readmore" href="single.php?id=<?php echo $row ['id']; ?>">Read More</a>
			
			
            
           
          </div><!-- /.blog-post -->
         <?php endwhile; ?>
		 
		
          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->
		<?php include 'includes/footer.php';?>