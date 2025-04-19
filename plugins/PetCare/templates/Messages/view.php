<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $message
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Messages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Message'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="messages view content">
            <h3><?= h($message->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($message->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Envoyeur') ?></th>
                    <td><?= $this->Number->format($message->id_envoyeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Receveur') ?></th>
                    <td><?= $this->Number->format($message->id_receveur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Envoi') ?></th>
                    <td><?= h($message->date_envoi) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Contenu') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($message->contenu)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>