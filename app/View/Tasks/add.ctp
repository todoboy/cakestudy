<h1>タスク追加</h1>
<?php
echo $this->Form->create('Task');
echo $this->Form->input('name');
echo $this->Form->input('body');
echo $this->Form->input('deadtime');
echo $this->Form->end('Save Post');
?>