<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />

		<title>Bootstrap 4 Challenge!</title>
	</head>
	<body>

		<header class="bg-info py-4 text-white">
			<div class="container">
				<h2>The Bootstrap Challenge</h2>
				<div>This exercise is intended to be the next level Bootstrap challenge. Use the Bootstrap Grid system and built-in UI components to create layout shown in the wireframes below.</div>
			</div>
		</header>

		<main class="py-4">
			<div class="container">

				<div class="card mb-4">
					<div class="card-body">
						<h4 class="card-title">Your Challenge Should You Choose to Accept It...</h4>
						<div><em>You're a fresh hire entry-level dev. Your resume said "Full Stack". The design team hands you this wireframe for a simple landing page. Code the following wireframe yourself, from scratch. Use Bootstrap. Add custom style it so it looks nice.</em></div>
					</div>
				</div>

				<h3>Objective</h3>
				<p>Reinforced practice of Bootstrap's grid system. HTML trial by fire. Referencing documentation under pressure. Fun.</p>

				<h3>Rules</h3>
				<ol>
					<li>Create a new project that contains ONE PAGE that successfully implements the layout shown in the wireframes below. This layout should be fully responsive, and conform to the mobile layout on small devices.</li>
					<li>Use Bootstrap's built-in classes to the greatest extent possible for style. ONLY AFTER you are able to successfully create this layout using built-in Bootstrap classes and styles you can add truly custom styling.</li>
					<li>Use whatever placeholder images and text you like.</li>
					<li><strong>No copy/pasting from templates or existing projects!</strong> The challenge here is to create this layout <strong>from scratch</strong>.</li>
					<div>Source your dependencies and resources as needed, and use the Bootstrap documentation freely. Do not use example projects, pre-built templates, tutorials, or third-party code snippets as a head start. All of your new co-workers will know if you do. <em>**Code taken from the <strong>official Bootstrap documentation</strong>, FontAwesome documentation, and CDN links excepted.**</em></div>
					<li>Load ALL dependencies in the HTML &lt;head&gt; tag. Why? Because your technical lead said so. :P</li>
					<li>Feel the fuzzy!</li>
				</ol>
				<form onSubmit="alert('Come to 183 mark 214, three quarter impulse. Fire all phasers on mark.');">
					<h5>Do You Accept This Challenge?</h5>
					<div class="form-group">
						<div class="form-check form-check-inline">
							<label>
								<input type="radio" name="choice" value="yes">Yes!
							</label>
						</div>
						<div class="form-check form-check-inline">
							<label>
								<input type="radio" name="choice" value="sure">Sure!
							</label>
						</div>
					</div>
					<button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Commit!</button>
				</form>

				<hr>

				<h2>Mobile Layout</h2><p>These wireframes were created using <a href="https://mockflow.com/" target="_blank">mockflow.com</a>.</p>
				<img src="images/Mobile_Layout.png" alt="mobile wireframe" class="img-fluid">

				<h2>Desktop Layout</h2>
				<img src="images/Desktop_Layout.png" alt="desktop wireframe" class="img-fluid">
			</div>
		</main>

	</body>
</html>
