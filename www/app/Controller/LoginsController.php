<?php

// precisa disso se n da erro
App::uses("AppController","Controller");

class LoginsController extends AppController {
    public $helpers = array('Html', 'Form');
    public function add() {
        if (!empty($this->request->data)) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->redirect('/');
            }
        }
}
    protected function index() {
  }
}