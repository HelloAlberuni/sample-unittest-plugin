<?php
/**
 * Class SampleTest
 *
 * @package Sample_Plugin
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_sample() {
		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}

	// public function test_calculate_average(){
	// 	// Arrange
	// 	update_option('opt_value', array(10,20,30));
	// 	// Assume the array updated to an empty value dynamically
	// 	// update_option('opt_value', array());

	// 	// Act
	// 	$actual_value = calculate_average(get_option('opt_value'));

	// 	// Assert
	// 	$this->assertEquals( 20, $actual_value );
	// }

	// public function test_calculate_average_with_empty_array() {
    //     $actual_value = calculate_average([]);
    //     $this->assertEquals(0, $actual_value);
    // }

	// With empty array there will be a DivisionByZeroError
	public function test_calculate_average_with_empty_array() {
		// Since the array is empty, the function doesn't calculate and return empty value
		$actual_value = calculate_average([]);
		$this->assertEquals('', $actual_value);
	}

    public function test_calculate_average_with_one_value() {
        $actual_value = calculate_average([80]);
        $this->assertEquals(60, $actual_value);
    }

    public function test_calculate_average_with_two_values() {
        $actual_value = calculate_average([70, 90]);
        $this->assertEquals(30, $actual_value);
    }

    public function test_calculate_average_with_three_values() {
        $result = calculate_average([60, 70, 80]);
        $this->assertEquals(20, $result);
    }

    public function test_calculate_average_with_negative_values() {
        $result = calculate_average([-60, 70, -80]);
        $this->assertEquals(20, $result);
    }
}
