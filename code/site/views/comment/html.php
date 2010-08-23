<?php
/**
 * com_jbp      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: html.php 4 2010-07-11 09:59:36Z copesc $
 * @package		Jbp
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComCommentsViewCommentHtml extends ComDefaultViewHtml
{
	public function display()
	{
		$state = KFactory::get($this->getModel())->getState();
		
		$this->assign('target_type', $state->target_type);
		$this->assign('target_id', $state->target_id);
		$this->assign('return', $state->return);
		
		if (!KFactory::get('lib.joomla.user')->guest)
		{
			echo parent::display();	
		}
	}
}