<?php foreach ($messages as $message) : ?>
                    <tr>
                        <td><?php echo $this->Html->link(
                                $message['Message']['nome'],
                                array('controller' => 'messages', 'action' => 'view', $message['Message']['id'])
                            ); ?></td>
                        <td><?php echo $message['Message']['email']; ?></td>
                    </tr>
                <?php endforeach; ?>