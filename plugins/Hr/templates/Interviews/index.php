<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $interviews
 */
?>
<div class="interviews index content">
    <?= $this->Html->link(__('New Interview'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Interviews') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('application_id') ?></th>
                    <th><?= $this->Paginator->sort('interview_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($interviews as $interview): ?>
                <tr>
                    <td><?= $this->Number->format($interview->id) ?></td>
                    <td><?= $interview->hasValue('application') ? $this->Html->link($interview->application->id, ['controller' => 'Applications', 'action' => 'view', $interview->application->id]) : '' ?></td>
                    <td><?= h($interview->interview_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $interview->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $interview->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $interview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interview->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>