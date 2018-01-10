<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project-3</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="owl/owl.carousel.min.css">
	<link rel="stylesheet" href="owl/owl.theme.default.min.css">
	<meta charset="utf-8">
</head>
<body class="feedback-link">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	 <!--banner part-->
	
	 <?php include 'includes/banner.php' ?>

	 <!--nav part-->

	<?php include 'includes/nav.php' ?>

<main>
	<div class="center clearfix">
		<article>
			<h1>
				<span>
					<ins>
						Feedback.
					</ins>
				</span>
				<strong>
					feedback.  inquiry.  order.
				</strong>
			</h1>
			<div class="section clearfix">
				<form>
					<div>
						<input type="text" placeholder="Full name:" size="25">
						<input type="text" placeholder="Address:" size="35">
					</div>
					<div>
						<input type="text" placeholder="Country:" size="20">
						<input type="text" placeholder="Company:" size="35">
					</div>
					<div>
						<input type="text" placeholder="E-mail:" size="40">
						<input type="text" placeholder="Phone/Mobile:" size="15">
					</div>
					<div>
						<select type="text">
	     					 <option selected value="Subject">Subject</option>
	      					 <option value="Feedback">Feedback</option>
	    					 <option value="Inquiry">Inquiry</option>
	    					 <option value="Order">Order</option>
   						 </select>
					</div>
					<div>
						<textarea name="message" placeholder="Message:"></textarea>
					</div>
					<div>
						<input type="submit" value="send message">
					</div>
				</form>

			</div>
		</article>

			<?php include 'includes/aside.php' ?>
		

	</div>
</main>
	
	 <!--nav-2 part-->

<?php include 'includes/nav-2.php' ?>

	 <!--footer part-->
<?php include 'includes/footer.php' ?>

</body>
</html>