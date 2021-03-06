<?php echo Form::open(); ?>
<p>
	<?php echo Form::label('Name', 'name'); ?>
	<?php echo 'Name: '.Auth::instance()->get_screen_name(); ?>
</p>
<p>
	<?php echo Form::label('Comment', 'comment'); ?>
	<?php echo Form::textarea('comment', Input::post('comment', isset($comment) ? $comment->comment : ''), array('cols' => 60, 'rows' => 5)); ?>
</p>
<div class="actions">
	<input type="hidden" name="message_id" value="<?=$id?>">
	<?php echo Form::submit(); ?>
</div>
<?php echo Form::close(); ?>