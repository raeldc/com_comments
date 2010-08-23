<?php
/**
 * com_jes      Developed using Nooku Framework 0.7 (see README.php for revision number)
 * @version     $Id: date.php 52 2010-08-02 12:25:11Z copesc $
 * @package		Jbp
 * @copyright   Copyright (C) 2010 JooCode di Flavio Copes. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPLv2
 */

class ComCommentsHelperDate extends KObject
{	
	public function since(KDate $date) 
	{
		$date->addHours(-2);
		$date = strtotime($date->getDate());
        
		$today = time();
				
		// array of time period chunks
		$chunks = array(
			( 60 * 60 * 24 * 365 ), // years
			( 60 * 60 * 24 * 30 ),  // months
			( 60 * 60 * 24 * 7 ),   // weeks
			( 60 * 60 * 24 ),       // days
			( 60 * 60 ),            // hours
			( 60 ),                 // minutes
			( 1 )                   // seconds
		);
	
		$since = $today - $date;
	
		for ($i = 0, $j = count($chunks); $i < $j; $i++) 
		{
			$seconds = $chunks[$i];
			if ( 0 != $count = floor($since / $seconds))
			{
				break;
			}
		}
		
		if ($count>1) 
		{
			$trans = array('YEARS', 'MONTHS', 'WEEKS', 'DAYS', 'HOURS', 'MINUTES', 'SECONDS');
		} 
		else 
		{
			$trans = array('YEAR', 'MONTH', 'WEEK', 'DAY', 'HOUR', 'MINUTE', 'SECOND');
		}
		
		$string = JText::sprintf( @$trans[@$i], $count );
		
		if ($string)
		{
			return JText::sprintf('POSTED_AGO', $string);
		}
		else
		{
			return JText::_('NOW');
		}
		
	}	
}