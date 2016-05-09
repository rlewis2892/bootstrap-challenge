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
				<p>This exercise is intended to be the next level Bootstrap challenge. Use the Bootstrap Grid system to achieve the layouts shown in the wireframes below.</p>
			</div>

			<h3>Your Challenge Should You Choose to Accept It</h3>
			<p>You're a a fresh hire entry-level dev. Your resume said "Full Stack". The design team hands you this wireframe for a simple landing page. Code the following wireframe yourself, from scratch. Use Bootstrap. Have it look decent.</p>

			<h3>Objective</h3>
			<p>Reinforced practice of Bootstrap's grid system. HTML trial by fire. Referencing documentation under pressure. Fun.</p>

			<h3>Rules</h3>
			<ol>
				<li>Create a new project that contains ONE index.php file that implements the layout in the wireframe below. This layout should be fully responsive, and conform to the mobile layout on small devices.</li>
				<li>No custom CSS - use Bootstrap's defaults and built-in classes. If, AND ONLY IF, you are able to successfully code this layout using Bootstrap alone, then you may experiment with custom CSS for styling purposes.</li>
				<li>Sole Exception to Rule 2: It is recommended that you implement the Flexbox Sticky Footer.</li>
				<li>Use whatever images and text you like.</li>
				<li>No copy/pasting from existing projects! The challenge here is to create this layout <strong>from scratch</strong>.</li>
				<p>Source your dependencies and resources as needed, and use the Bootstrap documentation freely. Do not use example projects, pre-built templates, tutorials, or third-party code snippets as a head start. All of your new co-workers will know if you do, and that might be embarrassing for you. <em>**Code taken from the official Bootstrap documentation, FontAwesome documentation, and CDN links excepted.**</em></p>
				<li>Load ALL dependencies in the HTML &lt;head&gt; tag. Why? Because your technical lead said so. :P</li>
				<li>Feel the fuzzy!</li>
			</ol>
			<hr>
			<p>Do you accept this challenge?</p>
			<form class="form-inline" onSubmit="alert('Come to 183 mark 214, three quarter impulse. Fire all phasers on mark.');">
				<div class="checkbox">
					<input type="radio" name="choice" value="yes">
					<label for="yes">Yes</label>
				</div>
				<div class="checkbox">
					<input type="radio" name="choice" value="sure">
					<label for="sure">Sure</label>
				</div>
				<button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Commit!</button>
			</form>
			<img class="img-responsive" src="images/wireframe.svg" alt="wireframe">
		</div>
	</body>
</html>
