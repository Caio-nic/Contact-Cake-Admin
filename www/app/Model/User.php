<?php
App::uses('AppModel', 'Model');

class User extends AppModel{
    // public $validate = array(
    //     'name' => array(
    //         'minLength' => array(
    //             'rule' => array('minLength', '2'),
    //         ),
    //             'notBlank' => array(
    //                 'rule' => array('notBlank'),
    //                 // 'message' => 'Your Name is obrigatory'
    //             )
    //     ),
    //     'email' => array(
    //         'rule' => 'email',
    //         'message' => 'Email invalid'
    //     ),
    //     'password' => array(
    //         'rule' => 'password',
    //         'message' => 'Password invalid'
    //     ),
    // );


    public $validate = array(
        'name' => array(
            'minLength' => array(
                'rule' => array('minLength', '2'),
            ),
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => 'Your Name is obrigatory'
                )
        ),
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Email é obrigatório'
            ),
            'valid' => array(
                'rule' => 'email',
                'message' => 'Por favor, insira um email válido'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank', 
                //posso colocar o regex aq tbm
                'message' => 'Senha é obrigatória'
            )
        )
    );
    //criptografa a senha
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = password_hash($this->data[$this->alias]['password'], PASSWORD_DEFAULT);
        }
        return true;
    }
}
?>
