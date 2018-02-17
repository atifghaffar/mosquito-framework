<?php 
namespace Mosquito\Framework;

class Handler {
	
	
	function run( $uri = '/' ){
		
		print "Getting uri: $uri\n";
		if (!defined('SITE_ROOT')){
			die('SITE_ROOT is not defined. Cannot continue');
		}
		
		
		
		$this->site_root = SITE_ROOT;
		
		print "Site root is " . $this->site_root . "\n";
		
		
		# $l = new Logger();
		# $c = new Controller();
		# $t = new Template();
		
		
		$controller_file = $this->site_root . '/application/controller.php';
		if (!file_exists($controller_file)){
			die('Cannot find controller file: ' . $controller_file . "\n");
		}
		require($controller_file);
		$controller_class = new Site\Controller;
		
		
		$uri = $this->cleanUri($uri);
		$uriTokens = explode('/', $uri);
		print_r($uriTokens);
		

			
		
	}
	
	function cleanUri($uri){
		$uri = trim($uri, '/');
		$uri = preg_replace("@/{1,}@", "/", $uri); // Remove duplicate slashes
		return $uri;
	}
}