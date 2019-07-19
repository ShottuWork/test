<?php 


/**
 * 
 */
class Db 
{
	function __construct()
	{
		$this->db = PDO('WDDW');
	}
}