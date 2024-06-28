<?php
// precisa disso se n da erro
App::uses("AppController","Controller");

class UsersController extends AppController {
    public $helpers = array('Html', 'Form');

    protected function index() {
  }
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success('Login salvo');
                return $this->redirect(array('action' => 'login'));
            }
            $this->Flash->error(('Usuário existente..'));
            // $this->flash('Usuário existente.', array('action' => 'login'));

        }
}

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } 
            $this->Flash->error(('Incorrect password or email.'));
            // $this->flash('Nome de usuário ou senha incorretos.', array('action' => 'login'));
            // $this->Session->setFlash('Usuário ou senha inválidos.', 'default', array(), 'auth');

        }
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

}
?>