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
                <p><?php echo ($contact['Contact']['message']); ?></p>
            </div>
    </div>
</body>