
<!DOCTYPE html>
<html>
<?php
	echo $this->fetch('css');	
    echo $this->Html->css('contact');
?>
<head>
    <?php echo $this->Html->charset(); ?>
</head>

<body>
    <div class="content_container">
        <a href="/users/logout">Logout</a>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <td>
                            <?php echo $this->Html->link(
                                $contact['Contact']['name'],
                                array('controller' => 'contacts', 'action' => 'view', $contact['Contact']['id'])
                            ); ?>
                        </td>
                        <td>
                            <?php echo $contact['Contact']['email']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
</body>