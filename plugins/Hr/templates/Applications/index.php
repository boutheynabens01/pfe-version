<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $applications
 */
?>
<div class="applications index content">
    <?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Applications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('job_offer_id') ?></th>
                    <th><?= $this->Paginator->sort('candidate_id') ?></th>
                    <th><?= $this->Paginator->sort('cv_url') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('applied_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applications as $application): ?>
                <tr>
                    <td><?= $this->Number->format($application->id) ?></td>
                    <td><?= $application->hasValue('job_offer') ? $this->Html->link($application->job_offer->title, ['controller' => 'JobOffers', 'action' => 'view', $application->job_offer->id]) : '' ?></td>
                    <td><?= $application->hasValue('candidate') ? $this->Html->link($application->candidate->state, ['controller' => 'Candidates', 'action' => 'view', $application->candidate->id]) : '' ?></td>
                    <td><?= h($application->cv_url) ?></td>
                    <td><?= h($application->status) ?></td>
                    <td><?= h($application->applied_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
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