<?php 

class Message extends AppModel {
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Seu nome deve conter pelo menos 3 caractéres'
            )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email inválido'
        ),
        'mensagem' => array(
            'between' => array(
                'rule' => array('lengthBetween', 5, 1200),
                'message' => 'sua mensagem deve ter entre 5 e 1200 caractéres'
            )
        ),
    );
}