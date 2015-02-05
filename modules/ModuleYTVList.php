<?php
 
class ModuleYTVList extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_ytv_list';
 
	/**
	 * Compile the current element
	 */
	protected function compile()
	{
		/** @var \Contao\Database\Result $rs */
		$rs = Database::getInstance()
			->query('SELECT * FROM tl_ytv ORDER BY title');
 
		$this->Template->ytv = $rs->fetchAllAssoc();
	}
}