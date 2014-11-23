<table>
    <tr>
        <th></th>
        <!--<th>ID</th>-->
        <th>名前</th>
        <th>詳細</th>
        <th>デットタイム</th>
        <th>作成日</th>
        <th>更新日</th>
    </tr>
<?php foreach ($Tasks as $row): ?>
    <tr>
        <td><?php echo $this->Form->input( '', array( 'type' => 'checkbox','name' => $row['Task']['id']));?></td>
        <!--<td><?php echo h($row['Task']['id']);?></td>-->
        <td><?php echo h($row['Task']['name']);?></td>
        <td><?php echo h($row['Task']['body']);?></td>
        <td><?php echo h($row['Task']['deadtime']);?></td>
        <td><?php echo h($row['Task']['created']);?></td>
        <td><?php echo h($row['Task']['modified']);?> <?php echo $this->Html->link('編集', array('action'=>'edit', $row['Task']['id'])); ?> <?php echo $this->Form->postLink(
                '完了',
                array('action' => 'delete', $row['Task']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
<?php endforeach; ?>
</table>




<?php echo $this->Html->link('タスク追加', array('action' => 'add')); ?>





<!--
<?php
print_r($Tasks);
?>
-->


