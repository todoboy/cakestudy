<!-- app/View/Tasks/index.ctp -->

Add Post

<?php
echo $this->Form->create('Blog');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->end('追加');
?>
