<?php 
namespace Mosquito\Framework;

class Logger {
	function __construct(){
		
	}
	
	public static function log($msg = ''){
		print "Logging: $msg\n";
	}
}