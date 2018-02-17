<?php 
namespace Mosquito\Framework;
class Controller  {
	
	protected $_controller;
	protected $_action;
	protected $_request;
	protected $_template;

	public $render;
	
	function __construct(){
		print "Framework Controller Constructor" . "\n" ;
		
		$this->_template = new Template();
	}

	function __constructXX($controller, $action, $request=array()) {

		
		$this->_controller = ucfirst($controller);
		$this->_action = $action;
		$this->_request = $request;
		
		$this->doNotRenderHeader = 0;
		$this->render = 1;
		
		$templateClass = "Template";
		$this->_template = new Template();
		$this->_template->init($controller,$action);
		
		$this->set("controller", $controller);
		$this->set("action", $action);
		$this->set("request", $request);
		$this->set("ROOT", ROOT);
		$this->set("TEMPLATES", ROOT . "/templates");
		
	}
		
}