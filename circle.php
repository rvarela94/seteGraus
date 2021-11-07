<?php
	require_once "shape.php";

	define("TYPE", "3");

	var $cloneCircle;

	class circle extends shape {
		protected $radius;

		function __construct($radius) {
			$this->radius = $radius;
			parent::__construct($name, $length, $width, $id);
		}

		function __clone(){
			$this->cloneCircle = clone $this->cloneCircle;
		}

		public function returnCircleArea($radius) {
			echo "Área do objecto: " . 3.14 * ($radius * $radius) . "m2<br>";
		}
	}
?>
