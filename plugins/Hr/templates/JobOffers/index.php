<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $jobOffers
 */
?>
<div class="jobOffers index content">
    <?= $this->Html->link(__('New Job Offer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Job Offers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('salary') ?></th>
                    <th><?= $this->Paginator->sort('contract_type') ?></th>
                    <th><?= $this->Paginator->sort('deadline') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('hr_id') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jobOffers as $jobOffer): ?>
                <tr>
                    <td><?= $this->Number->format($jobOffer->id) ?></td>
                    <td><?= h($jobOffer->title) ?></td>
                    <td><?= $jobOffer->salary === null ? '' : $this->Number->format($jobOffer->salary) ?></td>
                    <td><?= h($jobOffer->contract_type) ?></td>
                    <td><?= h($jobOffer->deadline) ?></td>
                    <td><?= h($jobOffer->status) ?></td>
                    <td><?= $jobOffer->hasValue('hr') ? $this->Html->link($jobOffer->hr->state, ['controller' => 'Hrs', 'action' => 'view', $jobOffer->hr->id]) : '' ?></td>
                    <td><?= h($jobOffer->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jobOffer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jobOffer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jobOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobOffer->id)]) ?>
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