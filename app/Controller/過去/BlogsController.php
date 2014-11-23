<?php

class BlogsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');


    public function index() {
    
    // タイトルを呼び出せば、おけ

    $this->set('blogs', $this->Blog->find('all'));

}//index

    
    public function view($id = null) {
    
    // クリック（リクエストゲット）によって個別にidを取り、そのタイトル、ボディを表示

    $post = $this->Blog->findById($id);
    $this->set('post', $post);
    
}//view


    public function add() {
    
    // 入力受け取り→db保存→表示（indexで自動）and リダイレクト and バリデーション
    
    if ($this->request->is('post')) {
          
          if($this->Blog->save($this->request->data)){
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

    $post = $this->Blog->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('post', 'put'))) {
        $this->Blog->id = $id;
        if ($this->Blog->save($this->request->data)) {
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

    if ($this->Blog->delete($id)) {
    $this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
    return $this->redirect(array('action' => 'index'));
    }
    
}//delete



}//class

?>