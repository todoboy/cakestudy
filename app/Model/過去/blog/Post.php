<?php
 
class Post extends AppModel {
    public $hasMany = "Comment";
    
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => 'ЛєВ╢ВсВ╛В▀В╛В╡'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
?>