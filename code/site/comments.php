<?php 
/** 
 * @version     $Id: comments.php 2 2010-07-06 18:48:01Z copesc $
 * @package     Jbp 
 * @copyright   Copyright (C) 2009 Nooku. All rights reserved. 
 * @license     GNU GPLv2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html> 
 * @link        http://www.nooku.org 
 */ 

// Check if Koowa is active 
if(!defined('KOOWA')) 
{ 
	JError::raiseWarning(0, JText::_("Koowa wasn't found. Please install the Koowa plugin and enable it.")); 
    return; 
} 
try 
{ 
	// Require the defines
	KLoader::load('site::com.comments.defines');

	// Create the controller dispatcher
	KFactory::get('site::com.comments.dispatcher')->dispatch(KRequest::get('get.view', 'cmd', 'comments'));
} 
catch (Exception $e) 
{ 
	KFactory::get('site::com.error.controller.error')->manage($e);
} 
