<?php

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

    public function test_sebl_settings()
    {
        $this->assertTrue(function_exists('sebl_settings'));
    }
	public function test_sebl_settings_data()
	{
		$this->assertTrue(function_exists('sebl_settings_data'));
	}
	public function test_sebl_settings_page()
	{
		$this->assertTrue(function_exists('sebl_settings_page'));
	}

	public function test_sebl_css()
	{
		$this->assertTrue(function_exists('sebl_css'));
	}

	public function test_sebl_shortcode()
	{
		$this->assertTrue(function_exists('sebl_shortcode'));
	}

	public function test_Simple_Eventbrite_List()
	{
		$this->assertTrue( class_exists('Simple_Eventbrite_List') );
	}
	public function test_display()
	{
		$class = new \Simple_Eventbrite_List();
		$this->assertTrue( method_exists($class, 'display') );
	}
}
