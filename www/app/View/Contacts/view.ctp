<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); 
          echo $this->fetch('css');	
          echo $this->Html->css('contact');
    ?>
</head>

<body>
    <div class="container">
            <div class="content_container">
                <div>
                    <a href="/contacts">voltar</a>
                    <p><?php echo ($contact['Contact']['name']); ?></p>
                    <p><?php echo ($contact['Contact']['email']); ?></p>
                </div>
                <p class="contact"><?php echo ($contact['Contact']['contact']); ?></p>
            </div>
    </div>
</body>