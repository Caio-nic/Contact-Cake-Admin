<?php
App::uses("SimplePasswordHasher", "Controller/Component/Auth");

class User extends AppModel
{
    public $validate = array(
        'nome' => array(
            'minLength' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Your name must be at least 3 characters long.',
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Invalid email.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Email already registered.'
            )
        ),
        'senha' => array(
            'minLength' => array(
                'rule' => array('minLength', '8'),
                'message' => 'Your password must be at least 8 characters long.',
            ),
            'pattern' => array(
                'rule' => array('custom', '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'),
                'message' => 'Your password must contain at least one uppercase letter, one lowercase letter, and one number.',
            ),
        ),
        'confirmar_senha' => array(
            'matchPasswords' => array(
                'rule' => array('matchPasswords'),
                'message' => 'Suas senhas devem conresponder',
            )
        ),
    );
 
    //criptografa a senha / fora 1 
    // public function beforeSave($options = array()) {
    //     if (isset($this->data[$this->alias]['password'])) {
    //         $this->data[$this->alias]['password'] = password_hash($this->data[$this->alias]['password'], PASSWORD_DEFAULT);
    //     }
    //     return true;
    // }
    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

    public function matchPasswords($check) {
        $confirmPassword = array_values($check)[0];
        $password = $this->data[$this->alias]['password'];
    
        return $confirmPassword === $password;
    }
}
?>
