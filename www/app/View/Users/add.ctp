<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->meta('icon');
		echo $this->Html->css('index');
		echo $this->Html->css('contact');
	?>
</head>
<body>
<div class="container">
    <div class="card">
        
<?php
echo $this->Html->css('index');
echo $this->Html->css('contact');

$form = $this->Form->create('User', array('id'=>'addForm'));
?>
<div class="inputsForm">
    <?php 
    $form .= $this->Form->input('User.name', array('id'=>'name'));
    $form .= $this->Form->input('User.email', array('id'=>'email'));
    ?>
<div>
    <?php
    $form .= $this->Form->input('User.password', array('id'=>'password'));
    // $form .= $this->Form->input('password', array('id'=>'password'));
    ?>
</div>
</div>
<?php
$form .= $this->Form->end('Send', array('id'=>'button')) ;

echo $this->Html->tag('h1','Crie sua conta');
echo $form;
?>
</div>
</div>
</body>