<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $courseCategories
 */
?>
<div class="courseCategories index content">
    <?= $this->Html->link(__('New Course Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Course Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courseCategories as $courseCategory): ?>
                <tr>
                    <td><?= $this->Number->format($courseCategory->id) ?></td>
                    <td><?= h($courseCategory->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $courseCategory->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courseCategory->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courseCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseCategory->id)]) ?>
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