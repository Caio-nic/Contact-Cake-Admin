<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
</head>

<body>
    <div class="container">
        <section class="content_section">
            <div class="message_container">
                <div>
                    <a href="/contacts">voltar</a>
                    <p><?php echo ($contact['Contact']['name']); ?></p>
                    <p><?php echo ($contact['Contact']['email']); ?></p>
                </div>
                <p class="contact"><?php echo ($contact['Contact']['contact']); ?></p>
            </div>
        </section>
    </div>
</body>