<?php
	class shape {
		public $name;
		protected $width, $length;
		private $id;

		define("TYPE", "1");

		function __construct($name, $length = null, $width = null, $id) {
			$this->name = $name == null ? "Random Shape" : $name;
			$this->length = $length;
			$this->width = $width;
			$this->set_id($id);
		}

		function __clone(){
			$this->name = $this->name . " Cloned";
		}

		function get_id() {
			return $this->id;
		}

		function set_id($id = null) {
			$prefix = "SHP7G";
			$module = $id == null ? date("His") : $id;
			$sufix = date("Y");
			$baseId = $prefix . $module . $sufix;

			$this->id = $baseId;
		}

		public function returnShapeArea($length, $width) {
			echo "Área do objecto: " . $length * $width . "m2<br>";
		}
	}

	$object = new Shape("First", 25, 32, null);
	echo $object->get_id() ."<br>";
	echo $object->returnRectangleArea(12) ."<br>";

	$object2 = new Shape("First", 25, 32, "3YearsLater");
	echo $object2->get_id() ."<br>";
	echo $object2->returnRectangleArea(12) ."<br>";

	$copy = clone $object;
	print_r($object);
	print_r($copy);
?>