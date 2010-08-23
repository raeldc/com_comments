<?php
/**
 * com_jbp      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: html.php 2 2010-07-06 18:48:01Z copesc $
 * @package		Jbp
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComCommentsViewCommentsHtml extends ComDefaultViewHtml
{
	public function display()
	{
		$state = KFactory::get($this->getModel())->getState();
		
		$this->assign('target_type', $state->target_type);
		$this->assign('target_id', $state->target_id);
		$this->assign('return', $state->return);
		
		echo parent::display();
	}
}