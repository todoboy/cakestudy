<!-- app/View/Tasks/index.ctp -->
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>価格</th>
    </tr>
<?php foreach ($data as $row): ?>
    <tr>
        <td><?php echo h($row['Post']['id']);?></td>
        <td><?php echo h($row['Post']['name']);?></td>
        <td><?php echo h($row['Post']['price'])."円";?></td>
    </tr>
<?php endforeach; ?>
</table>

<?php
echo $this->Form->create('Post', array('url' => 'add'));
echo $this->Form->input('名前:');
echo $this->Form->input('価格:');
echo $this->Form->end('追加');
?>
