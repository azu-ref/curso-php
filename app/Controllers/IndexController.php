<?php

namespace App\Controllers;

use App\Models\Job;

class IndexController {
	public function indexAction() {
		$jobs = Job::all();
		
		$name = 'Fernando Azuaje';

		include '../views/index.php';
	}
}