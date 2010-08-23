<?php
/**
 * com_jes      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: comments.php 7 2010-07-11 13:27:47Z copesc $
 * @package		Jbp
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */


class ComCommentsModelComments extends KModelTable
{	
    public function __construct(KConfig $config) 
	{
		$config['table_behaviors'] = array('creatable'); 
		parent::__construct($config);
		
		// Set the state
		$this->getState()
		 	->insert('target_type', 'string')
	 		->insert('target_id', 'int')
 			->insert('return', 'url');
	}
	
	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		parent::_buildQueryWhere($query);

		$state = $this->getState();

		if($state->target_type) 
		{
			$query->where('target_type', '=', $state->target_type);
		}
		if($state->target_id) 
		{
			$query->where('target_id', '=', $state->target_id);
       	}
	}		
}