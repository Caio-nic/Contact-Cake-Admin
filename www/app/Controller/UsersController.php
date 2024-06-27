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
                $this->Flash->set('Login salvo');
                $this->redirect('/');             
            }
            $this->Flash->error(__('Não foi possível salvar o usuário. Por favor, tente novamente.'));
        }
}

// public function add() {
//     if ($this->request->is('post')) {
        
//         // Obter a senha inserida pelo usuário
//         $password = $this->request->data ['User']['password'];
        
//         // Criptografar a senha
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
//         $this->User->create();
//         $this->User->saveField('password', $hashed_password);
        
//         if ($this->User->save($this->request->data)) {
//             $this->Flash->set('Your login has been saved.');
//             $this->redirect(array('action' => 'login'));
//         }
//         $this->Flash->error(__('Não foi possível salvar o usuário. Por favor, tente novamente.'));
//     }
// }

public function login() {}
}

// public function login() {
//     if ($this->request->is('post')) {
//             $email = $this->request->data['User']['email'];
//     $password = $this->request->data['User']['password'];

//     // Encontrar usuário pelo email
//     $user = $this->User->findByEmail($email);

//     if ($user && password_verify($password, $user['User']['password'])) {
//         // Senha correta, iniciar sessão e redirecionar
//         $this->Auth->login($user['User']);
//         $this->redirect($this->Auth->redirectUrl());
//     } else {
//         // Senha incorreta, exibir mensagem de erro
//         $this->Session->setFlash('Email ou senha incorretos.');
//     }
// }
// }