<?php
	require_once "shape.php";

	define("TYPE", "3");

	class circle extends shape {
		protected $radius;

		function __construct($radius) {
			$this->radius = $radius;
			parent::__construct($name, $length, $width, $id);
		}

		public function returnCircleArea($radius) {
			echo "Área do objecto: " . 3.14 * ($radius * $radius) . "m2<br>";
		}
	}
?>
