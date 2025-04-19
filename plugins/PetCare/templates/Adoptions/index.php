<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $adoptions
 */
?>
<div class="adoptions index content">
    <?= $this->Html->link(__('New Adoption'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Adoptions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_animal') ?></th>
                    <th><?= $this->Paginator->sort('id_adoptant') ?></th>
                    <th><?= $this->Paginator->sort('date_adoption') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adoptions as $adoption): ?>
                <tr>
                    <td><?= $this->Number->format($adoption->id) ?></td>
                    <td><?= $this->Number->format($adoption->id_animal) ?></td>
                    <td><?= $this->Number->format($adoption->id_adoptant) ?></td>
                    <td><?= h($adoption->date_adoption) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $adoption->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adoption->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adoption->id)]) ?>
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