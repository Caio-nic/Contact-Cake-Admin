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
		echo $this->Html->css('index');
		echo $this->Html->css('contact');
	?>
</head>
<body>
<div class="container">
    <div class="card">      
		<?php
		echo $this->Html->tag('h1','Crie sua conta');
		echo $this->Form->create('User', array('id'=>'ContactAddForm'));
		?>
		<div class="inputsForm">
			<?php
				echo $this->Form->input('name', array('placeholder' => 'Name', 'id' =>'name', 'label' => false));
				echo $this->Form->input('email', array('placeholder' => 'Email', 'id' =>'email', 'label' => false));
				echo $this->Form->input('password', array('placeholder' => 'Password', 'id' =>'password', 'label' => false));		
				echo $this->Form->end('Send', array('id'=>'button')) ;
				?>
		</div>
		<!-- <?php
			echo $form;
		?> -->
	</div>

</div>
</body> 