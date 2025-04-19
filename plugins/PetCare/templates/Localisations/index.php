<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $localisations
 */
?>
<div class="localisations index content">
    <?= $this->Html->link(__('New Localisation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Localisations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ville') ?></th>
                    <th><?= $this->Paginator->sort('wilaya') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($localisations as $localisation): ?>
                <tr>
                    <td><?= $this->Number->format($localisation->id) ?></td>
                    <td><?= h($localisation->ville) ?></td>
                    <td><?= h($localisation->wilaya) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $localisation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $localisation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $localisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localisation->id)]) ?>
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