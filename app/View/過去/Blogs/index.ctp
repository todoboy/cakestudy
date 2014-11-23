<!-- app/View/Tasks/index.ctp -->

<h2>Posts</h2>
<ul>
<?php foreach ($blogs as $blog): ?>
<li><?php echo $this->Html->link($blog['Blog']['title'], array('action' => 'view', $blog['Blog']['id'])); ?>
 <?php echo $this->Html->link("編集", array('action' => 'edit', $blog['Blog']['id'])); ?> 
 <?php echo $this->Html->link("消去", array('action' => 'delete', $blog['Blog']['id']),
 array('confirm' => 'Are you sure?')); ?></li>
<?php endforeach; ?>
</ul>

<br>
<h2>Add Post</h2>

<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
