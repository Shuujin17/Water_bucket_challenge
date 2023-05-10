<?php

include_once '../models/Bucket.php';

class Bucketcontroller {
	
	public function solve($x, $y, $z) {
		// Create a new instance of the BucketModel
		$model = new BucketModel($x, $y, $z);
		
		// Call the solve() method on the model
		return $model->solve($x, $y, $z);
	}
}

$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

$response = (new Bucketcontroller())->solve($x, $y, $z);

if ($response['success']) {
    echo "<table>";
    echo "<tr><th>Bucket 1</th><th>Bucket 2</th><th>Action</th></tr>";
    foreach ($response['steps'] as $step) {
        echo "<tr><td>{$step[0]}</td><td>{$step[1]}</td><td>{$step[2]}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Could not find a solution.";
}

?>
