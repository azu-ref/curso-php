<?php

namespace App\Controllers;

use App\Models\Job;

class JobsController {
	public function getAddJobAction($request) {
		var_dump($request->getMethod());
		var_dump($request->getParsedBody());
		
		if($request->getMethod() === 'POST'){
			$postData = $request->getParsedBody();
			$job = new Job();
			$job->title = $postData['title'];
			$job->description = $postData['description'];
			$job->save();	
		}
		

		include '../views/addJobs.php';
	}
}