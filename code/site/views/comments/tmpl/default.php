<hr />
<a name='comments'></a>
<ul id="comments">
	<? foreach (@$comments as $comment) : ?>
		<? $user = KFactory::tmp('lib.joomla.user', array('user_id'=>$comment->created_by)); ?>
				
		<fieldset>	
			<div class="commment">			  
				<? if (KFactory::tmp('lib.joomla.user')->id == $comment->created_by) : ?>
				<form action="<?= @route('option=com_comments&view=comment&id='.$comment->id)?>" method="post" class="adminform" name="adminForm" style="float:right">
					<input type="submit" value="X" title="Delete" />
					<input type="hidden" id="return" name="return" value="<?=$return?>" />
					<input type="hidden" id="action" name="action" value="delete" />
				</form>	
				<? endif; ?>
		
				<div>
					<div class="comment-avatar">
						<img alt="Avatar" class="photo" height="50" width="50" title="<?=$user->name; ?>" src='http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5(strtolower($user->email)); ?>&size=50'>
						
					</div>
					<div class="comment-text">
						<?=$comment->text?>
						<?=$user->name?>, 
						<?
						$date = new KDate();
						$offset = KFactory::get('lib.joomla.config')->getValue('config.offset')+1;
						$date->setDate($comment->created_on)->addHours($offset);
						?>
						<? KFactory::get('lib.joomla.language.language')->load('com_comments'); ?>
						<?= @text(KFactory::tmp('site::com.comments.helper.date')->since($date)); ?>			
		 			</div>
				</div>
			</div>
		</fieldset>
	<? endforeach; ?>
</ul>

<? KFactory::tmp('site::com.comments.controller.comment')
	->target_id($target_id)
	->target_type($target_type)
	->return($return)
	->layout('add')
	->read(); 
?>


