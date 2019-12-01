<?php
namespace App\Models;

require_once('BaseElement.php');

class Job extends BaseElement {

    public function getDurationAsString() {
		$years = floor($this->months / 12);
		$extraMonths = $this->months % 12;

		return ($years >= 1) ? 
			"$years years $extraMonths months" :
			"$this->months months";
	}
}