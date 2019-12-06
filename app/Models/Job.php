<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
	protected $table = 'jobs';

    public function getDurationAsString() {
		$years = floor($this->months / 12);
		$extraMonths = $this->months % 12;

		return ($years >= 1) ? 
			"$years years $extraMonths months" :
			"$this->months months";
	}
}