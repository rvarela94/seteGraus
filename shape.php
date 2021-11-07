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

        function get_id() {
            return $this->id;
        }

        function set_id($id = null) {
            $prefix = "SHP7G";
            $module = $id == null ? date("His") : $id;
            $sufix = "2021";
            $baseId = $prefix . $module . $sufix;

            $this->id = $baseId;
        }

        public function returnShapeArea($length, $width) {
            echo "Área do objecto: " . $length * $width . "m2<br>";
        }
	}
?>
