<?php
class Main
{
	public $test_data;

	public function __construct() {
		$this->test_data = array(
			[ 7 ],
			[ 7, 5, 12345 ],
			[ 5, 0, 4, ],
			[ 10, 5, 15, ],
			[ 17, 8, 54321 ],
			[ 499999993, 9, 1000000000 ],
			[ 10, 5, 187 ],
			[ 2, 0, 999999999 ]
		);
	}

	public function findMaxValue ( $data ) {

		if ( count( $data ) < 3 ) {
			return 'Missing elements or data type not correct';
		}

		$ans = -1000000000;
		$x = $data[0];
		$y = $data[1];
		$n = $data[2];

		for ( $k = 0; $k <= $n; $k++ ) {
			if ( $k % $x == $y ) {
				$ans = max( $ans, $k );
			}
		}

		return ( ( $ans >= 0 && $ans <= $n) ? $ans : -1 );
	}

	public function runCases () {
		foreach ( $this->test_data as $data ) {

			echo '<h3>'.$this->findMaxValue( $data ).'</h3>';

		}
	}
}