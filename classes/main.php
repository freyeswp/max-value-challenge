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

	public function findMaxValue ( $x, $y, $n ) {
		$ans = -1000000000;

		for ( $k = 0; $k <= $n; $k++ ) {
			if ( $k % $x == $y ) {
				$ans = max( $ans, $k );
			}
		}

		if ( !$x || !$y || $n  ) {
			return 'Missing elements or data type not correct';
		}

		return ( ( $ans >= 0 && $ans <= $n) ? $ans : -1 );
	}

	public function runCases () {
		foreach ( $this->test_data as $data ) {

			echo '<h3>'.$this->findMaxValue( $data[0], $data[1], $data[2] ).'</h3>';

		}
	}
}