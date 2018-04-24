<?php

Class Autogen
{
	public function __construct()
	{

	}

	public static function ID($prefix)
	{	
		if(strlen($prefix) > 2){
			return false;
		}
        return $prefix . current_time('strtotime') . strtoupper(hash('crc32b',UNIQID()));	
	}
}