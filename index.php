<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1z">


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.0/tailwind.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Blinker&amp;display=swap'>

<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<style>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400");
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Raleway:wght@300&display=swap');

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}



::-webkit-scrollbar {
  width: 8px;
  background: #2d3436;
}

::-webkit-scrollbar-thumb {
  background: #17a2b8;
  border-radius: 8px;
}
.grid--container {
  height: 100%;
  display: grid;
  grid-template-columns: repeat(10, 1fr);
  grid-template-rows: repeat(10, 1fr);
}

.grid--image {
  background-size: cover;
  background-position: center;
  grid-column: 1/7;
  grid-row: 1/7;
}

.grid--content {
  background-color: rgba(255, 255, 255, 0.8);
  grid-column: 6/-1;
  grid-row: 4/-1;
}

.card--title {
  font-family: "Blinker", sans-serif;
}



@media (max-width: 1000px) {
  .grid-container {
    height: 100%;
  }

  .grid--content {
    background-color: rgba(255, 255, 255, 0.9);
    grid-column: 5/span 6;
  }
}
@media (max-width: 768px) {
  .grid--image {
    grid-column: 1/-1;
  }

  .grid--content {
    background-color: rgba(255, 255, 255, 0.9);
    grid-column: 2/span 8;
    grid-row: 6/-1;
    min-height: 100%;
  }
}
@media (max-width: 500px) {
  .grid--container {
    box-shadow: 0 0 32px rgba(0, 0, 0, 0.5);
  }

  .grid--image {
    grid-column: 1/-1;
    grid-row: 1/span 4;
  }

  .grid--content {
    background-color: white;
    grid-column: 1/-1;
    grid-row: 5/-1;
    min-height: 100%;
  }
}button.back-to-top{
  margin: 0 !important;
  padding: 0 !important;
  background: #fff;
	height: 0px;
  width: 0px;
  overflow: hidden;
	border-radius: 50px;
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
  color: transparent;
	clear: both;
  visibility: hidden;
  position: fixed;
  cursor: pointer;
  display: block;
  border: none;
  right: 50px;
	bottom: 75px;
  font-size: 0px;
  outline: 0 !important;
  z-index: 99;
  transition: all .3s ease-in-out;
}
button.back-to-top:hover,
button.back-to-top:active,
button.back-to-top:focus,{
  outline: 0 !important;
}
button.back-to-top::before {
  content: "\f077";
  font-family: "FontAwesome";
  display: block;
  vertical-align: middle;
  margin: -5px 0 auto;
}
button.back-to-top.show {
  display: block;
  background: #fff;
  color: #00ab6c;
  font-size: 25px;
  right: 25px;
	bottom: 50px;
  height: 50px;
  width: 50px;
  visibility: visible;
	box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
}
button.back-to-top.show:active {
  box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
  -moz-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
}</style>


<?php include "admin/db_connection.php"; ?>



<button class="back-to-top" type="button"></button>
<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Настаняване<br />
						уют и комфорт</h1><br />
						<p>Любезен и отзивчив перонал уютни стаи, чистота на ниво и много вкусна храна<br />
					</p><br>	<a style="text-decoration:none;" href="admin/reservation.php" class="button large">Резервирай сега</a><br>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a style="text-decoration:none;" href="admin/reservation.php" class="logo">Резервирай сега</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a style="text-decoration: none;" href="index.php">Home</a></li>
             <li> <a style="text-decoration: none;" data-scroll class="hov-color-red" href="#red" >About</a></li>
             <li><a style="text-decoration: none;" data-scroll class="hov-color-green" href="#green">Rooms</a></li>
             <li><a style="text-decoration: none;" data-scroll class="hov-color-blue" href="#blue">Contact</a></li>
						</ul>
						
					</nav>
          <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
          <script>// Scroll to the desired section on click
function scrollToSection(event) {
  event.preventDefault();
  var $section = $($(this).attr('href')); 
  $('html, body').animate({
    scrollTop: $section.offset().top
  }, 500);
}
$('[data-scroll]').on('click', scrollToSection);
// Back to top
var amountScrolled = 200;
var amountScrolledNav = 25;

$(window).scroll(function() {
  if ( $(window).scrollTop() > amountScrolled ) {
    $('button.back-to-top').addClass('show');
  } else {
    $('button.back-to-top').removeClass('show');
  }
});

$('button.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 800);
  return false;
});
</script>
				<!-- Main -->
					<div id="main" >
						<!-- Featured Post -->
							<article class="post featured" id="red" class="wide js-section">
								<header class="major">
								
									<h2><a>За нас<br />
									</a></h2>
									<p>Комплексът разполага с голям безплатен паркинг и добра интернет връзка <br />
                                                                        достъпна за всичко гости. На пешеходно разтояние е от плажа.<br /></p>
								</header>
								<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="admin/reservation.php" style="text-decoration:none" class="button large">Резервирай сега</a></li>
								</ul>
							</article>

						<!-- Posts -->
            <?php include "layout/sidebar.php"; ?>
            <?php 
                $no_posts_per_page = 3;
                if (isset($_GET['page']))
                {
                  $page = $_GET['page'];
                }
                else
                {
                  $page = 1;
                }
                $start = $no_posts_per_page * $page - $no_posts_per_page;
                $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 ORDER BY id desc LIMIT {$start} ,{$no_posts_per_page} ";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];
             ?>

<div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center p-4">
  <div class="grid--container mb-8 max-h-8 max-w-4xl">
    <div class="grid--image"><img  src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap"></div>
    <div class="grid--content p-8 shadow-2xl">
      <h1 class="card--title mb-4 text-4xl font-bold"><?php echo $view_post_title; ?></h1>
      <p class="card--content leading-tight mb-4"> <?php //echo $view_post_text; 
              echo substr($view_post_text, 0, 400) . "...";?></p><br>
     <a class="button button1"style="text-decoration:none;"href="post.php?postid=<?= $view_post_id; ?>">Прочети повече</a>
    </div>
  </div>




      <?php } ?>


        <!-- Pagination -->
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <?php 
                  $select_post_query = "SELECT * FROM posts WHERE post_status = 1";
                  $result_select_post_query = mysqli_query ($dbconnection, $select_post_query);
                  $sum_posts = mysqli_num_rows($result_select_post_query) ;
                  
                  $allpages = ceil($sum_posts / $no_posts_per_page);
                  
                if($page > 1)
                {
                  $previous= $page - 1;


                ?>
           <li> <a style="text-decoration: none;"class="button large" class="page-link" href="index.php?page=<?php echo $previous ?>">&larr; Previous</a></li>
             <?php } ?>
          </li>
          <li class="page-item">
            <?php 
                if ($page < $allpages)
                  {
                    $next= $page + 1;
              ?>
          <li> <a style="text-decoration: none;"class="button large" class="page-link" href="index.php?page=<?php echo $next ?>">Next &rarr;</a></li>
            <?php } ?>
          </li>
        </ul>

 



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->

  </div>
 <!-- Sidebar Widgets Column -->

				<!-- Footer -->

					<footer id="footer">
						<section id="blue" class="wide js-section">
							<form method="post" action="mail_handler.php">
								<div class="fields">
									<div class="field">
										<label for="name">Име</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Съобщение</label>
										<textarea name="msg" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" name="submit" value="Send Message" id="submit" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
							<section>
								<h3>Link</h3>
								<p><a>http://hotel-bg.atwebpages.com/</a></p>
							</section>
							<section>
								<h3>Телефон</h3>
								<p><a>089 444 2458</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a>hotel_support@gmail.com</a></p>
							</section>
							
						</section>
					</footer>
				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; 2021</ul>
					</div>

			</div>

  <!-- Navigation -->
 
  <!-- Page Content -->

  <!-- /.container -->

  <!-- Footer -->
  
  

  

 

<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>


