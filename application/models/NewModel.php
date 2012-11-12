<?php

class Application_Model_NewModel extends My_Model_Abstract
{
	
	public function __construct()
	{
		$this->disableCache();
		parent::__construct();
	}
	
	public function getJobs($id)
	{
		$items = $this->_getContentListByCategoryId(array($id));
		return $items;
	}
}