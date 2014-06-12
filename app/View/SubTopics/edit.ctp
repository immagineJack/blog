<div class="subTopics form">
<?php echo $this->Form->create('SubTopic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sub Topic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('main_topic_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubTopic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubTopic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Topics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Main Topics'), array('controller' => 'main_topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Main Topic'), array('controller' => 'main_topics', 'action' => 'add')); ?> </li>
	</ul>
</div>
