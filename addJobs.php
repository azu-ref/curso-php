<?php 

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursoPhp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if(!empty($_POST)){
	$job = new Job();
	$job->title = $_POST['title'];
	$job->description = $_POST['description'];
	$job->save();	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
	<h1>Add Job</h1>
	<div>
		<form action="addJob.php" method="POST">
			<label for="title">Title: </label>
			<input type="text" name="title"><br>
			<label for="description">Description: </label>
			<input type="text" name="description"><br>
			<button type="submit">Save</button>
		</form>
	</div>
</div>
</body>