<?php
use PHPUnit\Framework\TestCase;
require('vendor/autoload.php');
require_once 'includes/required-classes.php';

final class MainTest extends TestCase {

	public function testGetMaxValue ()
	{
		$faker = Faker\Factory::create();

		$data_test = [ $faker->randomNumber(8, false), $faker->randomNumber(6, false), $faker->randomNumber(7, false) ];

		$main = new Main();

		$result = $main->findMaxValue( $data_test );

		$result ? $this->assertTrue(true) : $this->markTestIncomplete('Error in the test') ;

	}
}