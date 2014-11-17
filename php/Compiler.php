<?php


class Compiler {


	public $iterations		= 24;

	public $breakpoints		= array('sm', 'md', 'lg');

	public $factors			= true;

	public $prefix_column	= "plura-c-";



	public function get() {

		return $this->iterate( $this->iterations, $this->variations );

	}



   /**
	* creates all possible iterations
	* 	. every iteration from 1 to 24: 1-24, 2-24, etc...
	*	. every optional iteration from exact whole numbers, factors of the number of iterations
	*/
	public function iterate ($iterations, $breakpoints) {

		$a = array();

		for ($i = 0;  $i < $iterations; $i += 1) {

			$id		= $this->prefix_column . ($i + 1) . "-" . $iterations;

			$w		= round( ($i + 1) / $iterations * 10000 ) / 10000 * 100;

			$a[]	= array('id' => $id, 'width' => $w);

			//echo $id . ' : ' . $w . "<br/>";

			if ($this->factors && ( $i + 1) > 1 && ($i + 1) < 24 && $iterations % ( $i + 1 ) === 0) {

				//echo "<br/>";

				for ($n = 0; $n < $i; $n += 1) {

					$id		= $this->prefix_column . ($n + 1) . "-" . ($i + 1);			

					$w		= round( ($n + 1) / ($i + 1) * 10000 ) / 10000 * 100;

					$a[]	= array('id' => $id, 'width' => $w);

					//echo $id . ' : ' . $w . "<br/>";

				}

				//echo "<br/>";

			}


		}

		return 'yay';
	
	}



	public function render( $data ) {

		$txt = "";

		for ($i = 0; i < count( data ); $i += 1) {
			
			$txt += "." + $data[$i]['id'] + " { width: " + $data[$i]['width'] + "%; }\n";
			
		}

		return $txt;

	}


}


?>
