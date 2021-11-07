<?php
	class circle extends shape {
		protected $radius;

		function __construct($radius) {
			$this->radius = $radius;
		}

		public function returnCircleArea($radius) {
			return 3.14 * ($radius * $radius);
		}
	}
?>
