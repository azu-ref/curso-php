<?php

use App\Models\{Job,Printable};

function printJob($job) {
  $duration = $job->getDurationAsString();
  echo "
    <li class=\"work-position\">
      <h5>{$job->title}</h5>
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

