<?php
// precisa disso se n da erro
App::uses("AppController","Controller");

class UsersController extends AppController {
    public $helpers = array('Html', 'Form');
   
    public function add() {
        if ($this->request->is('post')) {
            $this->Users->create();
            if ($this->Users->save($this->request->data)) {
                $this->Flash->set('Your login has been saved.');
                $this->redirect('/login');             
            }
            $this->Flash->error(__('Não foi possível salvar o usuário. Por favor, tente novamente.'));
        }
}
    protected function index() {
  }
}