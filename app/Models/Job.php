<?php
namespace App\Models;


class Job extends BaseElement {

    public function getDurationAsString() {
		$years = floor($this->months / 12);
		$extraMonths = $this->months % 12;

		return ($years >= 1) ? 
			"$years years $extraMonths months" :
			"$this->months months";
	}
}