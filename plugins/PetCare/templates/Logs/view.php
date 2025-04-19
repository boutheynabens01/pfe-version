<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $log
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Log'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logs view content">
            <h3><?= h($log->action) ?></h3>
            <table>
                <tr>
                    <th><?= __('Action') ?></th>
                    <td><?= h($log->action) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($log->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Animal') ?></th>
                    <td><?= $this->Number->format($log->id_animal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Admin') ?></th>
                    <td><?= $this->Number->format($log->id_admin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Action') ?></th>
                    <td><?= h($log->date_action) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Raison Refus') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($log->raison_refus)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>