<?php
App::uses('AppModel', 'Model');
class User extends AppModel{
    public $validate = array(
        'name' => array(
            'minLength' => array(
                'rule' => array('minLength', '2'),
            ),
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    // 'message' => 'Your Name is obrigatory'
                )
        ),
        'email' => array(
            'rule' => 'email',
            'message' => 'Email invalid'
        ),
        'password' => array(
            'rule' => 'password',
            'message' => 'Password invalid'
        ),
    );
}
?>