<!-- app/View/Tasks/index.ctp -->

<h1>Edit Post</h1>

<?php
echo $this->Form->create('Blog');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('更新');
?>
