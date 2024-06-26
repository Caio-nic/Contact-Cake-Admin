<div class="container">
    <div class="card">
        
        <?php
echo $this->Html->css('index');
echo $this->Html->css('contact');

$form = $this->Form->create('Contact', array('id'=>'addForm'));
?>
<div class="inputsForm">
    <?php 
    $form .= $this->Form->input('email', array('id'=>'email'));
    ?>
    <?php
    $form .= $this->Form->input('password', array('id'=>'password'));
    ?>
</div>
<?php
$form .= $this->Form->end('Login', array('id'=>'button')) ;

echo $this->Html->tag('h1','Login');
echo $form;
echo $this->Html->link('Registre-se', array('controller' => 'users', 'action' => '/add'));
	
?>
</div>
</div>