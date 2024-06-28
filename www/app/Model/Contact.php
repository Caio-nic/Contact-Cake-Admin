<?php 

class Contact extends AppModel {
    
    public $validate = array(
        'name' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Seu nome deve conter pelo menos 3 caractéres'
            )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email inválido'
        ),
        'message' => array(
            'between' => array(
                'rule' => array('lengthBetween', 5, 1200),
                'message' => 'sua mensagem deve ter entre 5 e 1200 caractéres'
            )
        ),
    );
}