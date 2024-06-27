
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
<div class="container">
    <div class="card">      
		<?php
		echo $this->Html->tag('h1','Login');
		echo $this->Form->create('User', array('id'=>'ContactAddForm'));
		?>
		<div class="inputsForm">
			<?php
				echo $this->Form->input('email', array('placeholder' => 'Email', 'id' =>'email', 'label' => false));
				echo $this->Form->input('password', array('placeholder' => 'Password', 'id' =>'password', 'label' => false));		
				echo $this->Form->end('Send', array('id'=>'button')) ;
				?>
		</div>
		<?php
            echo $this->Html->link('Crie sua conta', array('controller' => 'users', 'action' => '/add'));
        ?>
	</div>

</div>
