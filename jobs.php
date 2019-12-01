<?php

$jobs = [
  [
    'title' => 'Node.js Developer',
    'description' => 'One year learning Node in Platzi',
    'duration' => 20,
  ],
  [
    'title' => 'Php Developer',
    'description' => 'One moth learning Php in Platzi',
    'duration' => 16,
  ],
  [
    'title' => 'Python Developer',
    'description' => 'Mid year learning python in Platzi',
    'duration' => 12,
  ]
];

function getDuration($jobDuration) {
  $years = floor($jobDuration / 12);
  $extraMonths = $jobDuration % 12;

  return ($years >= 1) ? 
    "$years years $extraMonths months" :
    "$extraMonths months";
}

function printJob($job) {
  $duration = getDuration($job['duration']);
  echo "
    <li class=\"work-position\">
      <h5>{$job['title']}</h5>
      <p>{$job['description']}</p>
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

