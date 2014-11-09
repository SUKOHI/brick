<?php namespace Sukohi\Brick;

use Illuminate\Support\Facades\View;
class Brick {
	
	private $_jquery = false;
	private $_keys = array('CTRL', 'B');
	private $_as = array();
	
	public function __toString() {
		
		return $this->render();
		
	}
	
	public function fire($shortcut_key, $as = array()) {
		
		list($first, $second) = explode('+', $shortcut_key);
		$this->_keys = array(
			
			strtoupper($first), 
			strtoupper($second)
			
		);
		
		if(!empty($as)) {
			
			$this->_as = $as;
			
		}
		
		return $this;
		
	}
	
	public function jquery($boolean=true) {
		
		$this->_jquery = $boolean;
		return $this;
		
	}
	
	public function render() {
		
		return View::make('packages.sukohi.brick.script', array(
			
			'jquery' => $this->_jquery, 
			'keys' => $this->_keys,
			'as' => $this->_as
			
		))->render();
		
	}
	
}