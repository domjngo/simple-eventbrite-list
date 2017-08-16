<?php

class FunctionsTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

    public function test_tna_ebapi_settings()
    {
        $this->assertTrue(function_exists('tna_ebapi_settings'));
    }
	public function test_tna_ebapi_settings_data()
	{
		$this->assertTrue(function_exists('tna_ebapi_settings_data'));
	}
	public function test_tna_ebapi_settings_page()
	{
		$this->assertTrue(function_exists('tna_ebapi_settings_page'));
	}

	public function test_tna_ebapi_css()
	{
		$this->assertTrue(function_exists('tna_ebapi_css'));
	}

	public function test_tna_ebapi_shortcode()
	{
		$this->assertTrue(function_exists('tna_ebapi_shortcode'));
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
