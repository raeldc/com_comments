<div> 
	<form action="<?= @route('option=com_comments&view=comment')?>" method="post" class="adminform" name="adminForm">
		<fieldset>
			<legend><?=@text('Add a new comment');?></legend>
			<div class="form-row">
					<?= KFactory::get('lib.joomla.editor', array('tinymce'))->display( 'text',  @$comment->text , '100%', '50', '75', '20', null, array('theme' => 'simple')) ; ?>
					<input type="hidden" id="target_id" name="target_id" value="<?=$target_id?>" />
					<input type="hidden" id="target_type" name="target_type" value="<?=$target_type?>" />
					<input type="hidden" id="return" name="return" value="<?=$return?>" />
					<input type="hidden" id="action" name="action" value="save" />
			</div>
			<div class="form-buttons">
				<button class="button validate" type="submit"><?=@text('Insert comment')?></button>
			</div>
		</fieldset>
	</form>	
</div> 
