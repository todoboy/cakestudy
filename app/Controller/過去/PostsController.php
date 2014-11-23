<?php

class PostsController extends AppController {
    
    //いちいち設定しなくとも、以下のはある？
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    
    
    public function index() {
        
        //データをモデルから取得してビューへ渡す
        
        $this->set('data', $this->Post->find('all')); 
        
        //postされたデータを保存（表示は自動）
        
        

 } //index
 
 
 public function add() {
        if ($this->request->is('post')) {
          if($this->Post->save($this->request->data)){
          $this->Session->setFlash('Success!');
          $this->redirect(array('action'=>'index'));
          }//session
          else{
           $this->Session->setFlash('failed!');
           $this->redirect(array('action'=>'index'));
          }//else
  }//is post
 } //add
 
} //class


?>