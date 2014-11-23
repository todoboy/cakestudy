<?php
 
class Post extends AppModel {
    public $hasMany = "Comment";
    
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => '�󂶂Ⴞ�߂���'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>