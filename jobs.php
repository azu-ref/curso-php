<?php
require_once 'vendor/autoload.php';
//require_once 'app/models/Job.php';

use App\Models\{Job,Printable};

$job1 = new Job('Node.js Developer', 'One year learning node in platzi');
$job1->duration = 7;

$job2 = new Job('Php Developer', 'One month learning php in platzi');
$job2->duration = 1;

$job3 = new Job('Pyhthon Developer', 'Four months in platzi');
$job3->duration = 4;

$jobs = [
  $job1,
  $job2,
  $job3,
];

function printJob(Printable $job) {
  $duration = $job->getDurationAsString();
  echo "
    <li class=\"work-position\">
      <h5>{$job->getTitle()}</h5>
      <p>{$job->description}</p>
      <p>{$duration}</p>
      <strong>Achievements:</strong>
      <ul>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
        <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
      </ul>
    </li>
    ";
}

