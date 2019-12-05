<?php
namespace App\Models;

interface Printable {
    public function __construct($title, $description);
    public function setTitle($title);
    public function getTitle();
}