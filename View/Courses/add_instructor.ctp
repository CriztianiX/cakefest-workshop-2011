<div class="courses form">
<?php echo $this->Form->create('Course');?>
	<fieldset>
		<legend><?php echo __('New Instructor'); ?></legend>
	<?php
		echo $this->Form->input('instructor', array('options' => $users, 'empty' => __('Select an instructor')));	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index'));?></li>
	</ul>
</div>
