<?php
namespace App\Models;

require_once('Printable.php');

class BaseElement implements Printable {
	protected $title;
	public $description;
	public $months;
	public $visible = true;

	public function __construct($title, $description) {
		$this->setTitle($title);
		$this->description = $description;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

}