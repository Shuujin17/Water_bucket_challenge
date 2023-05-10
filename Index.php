<!DOCTYPE html>
<html>
<head>
	<title>Water Bucket Challenge</title>
</head>
<body>
	<div class="container">
		<h1>Water Bucket Challenge</h1>
		<form action="controllers/Bucketcontroller.php" method="POST">
			<label for="x">Bucket 1:</label>
			<input type="number" id="x" name="x" min="1" required>
			<label for="y">Bucket 2:</label>
			<input type="number" id="y" name="y" min="1" required>
			<label for="z">Goal:</label>
			<input type="number" id="z" name="z" min="1" required>
			<button type="submit">Solve</button>
		</form>


	</div>

	<?php
	// Check if the form has been submitted
	if(isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z'])) {
		
		// Create a new instance of the BucketController
		$controller = new Bucketcontroller();
		
		// Call the solve() method on the controller
		$result = $controller->solve($_POST['x'], $_POST['y'], $_POST['z']);

		// Output the result
		echo "<p>$result</p>";
	}
	?>
</body>
</html>
