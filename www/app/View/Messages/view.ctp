<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Contato.con
    </title>
    <?php
    echo $this->Html->css('dashboard');
    ?>
</head>

<body>
    <div class="content_container">
        <aside class="menu_container">
            <div class="user_container">
                <div><img src="/img/circulo-azul-com-usuario-branco.png" alt=""></div>
                <h2>Name</h2>
                <button>Lorem ipsum</button>
            </div>
            <nav>
                <ul>
                    <li>Messages</li>
                    <li>Data</li>
                    <li>Projects</li>
                    <li>Web Pages</li>
                </ul>
            </nav>
            <a href="/users/logout">Logout</a>
        </aside>
        <section class="content_section">
            <a class="back_btn" href="/messages/index"><img class="back_icon" src="/img/chevron-left-solid.svg" > voltar</a>
            <div class="message_container">
                <div>
                    <p><?php echo ($message['Message']['nome']); ?></p>
                    <p><?php echo ($message['Message']['email']); ?></p>
                </div>
                <p class="message"><?php echo ($message['Message']['mensagem']); ?></p>
            </div>
        </section>
    </div>
</body>