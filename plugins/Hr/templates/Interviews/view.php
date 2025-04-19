<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $interview
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Interview'), ['action' => 'edit', $interview->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Interview'), ['action' => 'delete', $interview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interview->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Interviews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Interview'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="interviews view content">
            <h3><?= h($interview->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Application') ?></th>
                    <td><?= $interview->hasValue('application') ? $this->Html->link($interview->application->id, ['controller' => 'Applications', 'action' => 'view', $interview->application->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($interview->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Interview Date') ?></th>
                    <td><?= h($interview->interview_date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($interview->comment)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>