<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>Bootstrap Levelled Up Challenge</title>
	</head>
	<body>
		<div class="container">
			<div class="well m-t-2">
				<h2 class="m-t-0">Front End Dev Challenge</h2>
				<p>This exercise is intended to be the next level Bootstrap challenge. Use the Bootstrap Grid system and built-in UI components to create layout shown in the wireframes below.</p>
			</div>

			<h3>Your Challenge Should You Choose to Accept It</h3>
			<p>You're a a fresh hire entry-level dev. Your resume said "Full Stack". The design team hands you this wireframe for a simple landing page. Code the following wireframe yourself, from scratch. Use Bootstrap. Have it look decent.</p>

			<h3>Objective</h3>
			<p>Reinforced practice of Bootstrap's grid system. HTML trial by fire. Referencing documentation under pressure. Fun.</p>

			<h3>Rules</h3>
			<ol>
				<li>Create a new project that contains ONE PAGE that successfully implements the layout shown in the wireframes below. This layout should be fully responsive, and conform to the mobile layout on small devices.</li>
				<li>Custom design and style is not the point of the exercise, so stick with Bootstrap's default UI styles. If, AND ONLY IF, you are able to successfully create this layout using the Bootstrap defaults, then you may experiment with truly custom styling.</li>
				<li>Hint: You'll probably need some custom CSS and a "Sticky Footer" solution. Everything you need is in the bootcamp-coders documentation.</li>
				<li>Use whatever placeholder images and text you like.</li>
				<li><strong>No copy/pasting from templates or existing projects!</strong> The challenge here is to create this layout <strong>from scratch</strong>.</li>
				<p>Source your dependencies and resources as needed, and use the Bootstrap documentation freely. Do not use example projects, pre-built templates, tutorials, or third-party code snippets as a head start. All of your new co-workers will know if you do, and that might be embarrassing for you. <em>**Code taken from the <strong>official Bootstrap documentation</strong>, FontAwesome documentation, and CDN links excepted.**</em></p>
				<li>Load ALL dependencies in the HTML &lt;head&gt; tag. Why? Because your technical lead said so. :P</li>
				<li>Feel the fuzzy!</li>
			</ol>
			<form onSubmit="alert('Come to 183 mark 214, three quarter impulse. Fire all phasers on mark.');">
				<div class="form-group">
					<label for="acceptChallenge">Do You Accept This Challenge?</label>
					<div class="row">
						<div class="col-xs-12">
							<div class="radio-inline">
								<label>
									<input type="radio" name="choice" value="yes">Yes!
								</label>
							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="choice" value="sure">Sure!
								</label>
							</div>
						</div>
					</div>
					<button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Commit!</button>
				</div>
			</form>

			<hr>

			<h2>Desktop Layout</h2>
			<p>These wireframes were created using <a href="https://mockflow.com/" target="_blank">mockflow.com</a>.</p>
			<img src="images/Desktop_Layout.png" alt="desktop wireframe" class="img-responsive">

			<h2>Mobile Layout</h2>
			<img src="images/Mobile_Layout.png" alt="mobile wireframe" class="img-responsive">

		</div>
	</body>
</html>
