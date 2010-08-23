<?php
/**
 * com_jbp      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: comments.php 2 2010-07-06 18:48:01Z copesc $
 * @package		Jbp
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComCommentsTableComments extends KDatabaseTableAbstract 
{ 
	/**
	 * Filter the data, 'text' is an HTML field
	 */	
    public function filter($data) 
    { 
    	settype($data, 'array'); //force to array 

		if ($data['text']) 
		{
	    	$this->getColumn('text')->filter = KFactory::tmp('lib.koowa.filter.html'); 
		}
		
        return parent::filter($data); 
    } 
} 
