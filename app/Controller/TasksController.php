<?php

class TasksController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


    public function index() {
    
    // データを呼び出せば、おけ

    $this->set('Tasks', $this->Task->find('all'));
    
    /*
    //チェックボックス
    $this->set( 'select1', $this->Task->find( 'list', array( 
    'fields' => array( 'id', 'name')
    )));
    */

}//index



public function add() {
    
    // 入力受け取り→db保存→表示（indexで自動）and リダイレクト and バリデーション
    
    if ($this->request->is('post')) {
          
          if($this->Task->save($this->request->data)){
          $this->Session->setFlash('Success!');
          $this->redirect(array('action'=>'index'));
          
          }//session
          
          else{
           $this->Session->setFlash('failed!');
           $this->redirect(array('action'=>'index'));
     
     }//else
  
  }//is post

}//add



    public function edit($id = null) {
    
    // 入力欄にID別に表示→データを指定のＩＤに受け取り更新→表示（自動）
    
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Task->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Task->id = $id;
        if ($this->Task->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
    
    if (!$this->request->data) {
        $this->request->data = $post;
    }

}//edit


    public function delete($id) {
    
    // クリックされたら（リクエスト）、そのＵＲＬＩＤと一致するＤＢを見つけ、消す

    if ($this->Task->delete($id)) {
    $this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
    return $this->redirect(array('action' => 'index'));
    }
    
}//delete



/*
    
    public function view($id = null) {
    
    // クリック（リクエストゲット）によって個別にidを取り、そのタイトル、ボディを表示

    $post = $this->Blog->findById($id);
    $this->set('post', $post);
    
}//view

*/






}//class

?>