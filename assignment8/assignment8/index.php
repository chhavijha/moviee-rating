<html lang="en">
<head>
	
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	
<link rel="stylesheet" href="style.css"/>
<title>Movie Rating Portal</title>
</head>
<body>
	<section>
	<h2>Movie  Rating  Portal</h2>
</section>
<div class="container" id="container">
	<div class="form-container rating-container">
			<form method="post" action="next.php">
					<h1>Rate Movies</h1>
					
					<br>
			Select Movie: <select name="movie">
			<option value="-1">Choose</option>
				<option value="JOKER">JOKER</option>
				<option value="INCEPTION">INCEPTION</option>
				<option value="DUNKIRK">DUNKIRK</option>
		</select>
		<br><br>
		Rate out of 5: <select name="rate">
			<option value="-1">Choose</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
		</select>
		<br><br>
					<button name="Submit">Submit</button>
				</form>
	
	</div>
	<div class="form-container view-rating-container">
			<form method="post" action="next.php">
					<h1>View Ratings</h1>
					<br>
					Select Movie: <select name="movie1">
			<option value="-1">Choose</option>
				<option value="JOKER">JOKER</option>
				<option value="INCEPTION">INCEPTION</option>
				<option value="DUNKIRK">DUNKIRK</option>
		</select>
		<br><br>
					<button name="Check_Rating">Check_Rating</button>
				</form>
	
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Friend!</h1>
				<p>Want to see movie ratings, please click on Know_ratings</p>
				<button class="ghost" id="Know_Ratings">Know_Ratings</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome !</h1>
				<p>To rate the movies, please click on Rate Movies</p>
				<button class="ghost" id="Rate">Rate</button>
			</div>
		</div>
	</div>
</div>
<script src="main.js"></script>
</body>
</html>