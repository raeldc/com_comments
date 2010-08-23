<?php
/**
 * com_jbp   	Developed using Nooku Framework 0.7  
 * @version     $Id: comment.php 2 2010-07-06 18:48:01Z copesc $
 * @package		JBP JooCode Blog Platform
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComCommentsControllerComment extends ComDefaultControllerDefault 
{
	public function getRedirect()
	{
		$action = KRequest::get('post.action', 'string');

		if ($action == "save") 
		{
	  		$return = KRequest::get('post.return', 'url');
					
			return $result = array(
				'url' 			=> JRoute::_($return, false),
			);
		} 
		else if ($action == 'delete')
		{
	  		$return = KRequest::get('post.return', 'url');
					
			return $result = array(
				'url' 			=> JRoute::_($return, false),
			);
		}
		else 
		{			
			$result = array();
			
			if(!empty($this->_redirect))
			{
				$url = $this->_redirect;
			
				//Create the url if no full URL was passed
				if(strrpos($url, '?') === false) 
				{
					$url = 'index.php?option=com_'.$this->_identifier->package.'&'.$url;
				}
			
				$result = array(
					'url' 			=> JRoute::_($url, false),
					'message' 		=> $this->_message,
					'messageType' 	=> $this->_messageType,
				);
			}
			
			return $result;
		}
	}
	
}