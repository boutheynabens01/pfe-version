<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $jobOffer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Job Offer'), ['action' => 'edit', $jobOffer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Job Offer'), ['action' => 'delete', $jobOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobOffer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Job Offers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Job Offer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobOffers view content">
            <h3><?= h($jobOffer->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($jobOffer->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contract Type') ?></th>
                    <td><?= h($jobOffer->contract_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($jobOffer->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hr') ?></th>
                    <td><?= $jobOffer->hasValue('hr') ? $this->Html->link($jobOffer->hr->state, ['controller' => 'Hrs', 'action' => 'view', $jobOffer->hr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($jobOffer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salary') ?></th>
                    <td><?= $jobOffer->salary === null ? '' : $this->Number->format($jobOffer->salary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deadline') ?></th>
                    <td><?= h($jobOffer->deadline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($jobOffer->created_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($jobOffer->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Applications') ?></h4>
                <?php if (!empty($jobOffer->applications)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Job Offer Id') ?></th>
                            <th><?= __('Candidate Id') ?></th>
                            <th><?= __('Cv Url') ?></th>
                            <th><?= __('Motivation Letter') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Applied At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($jobOffer->applications as $application) : ?>
                        <tr>
                            <td><?= h($application->id) ?></td>
                            <td><?= h($application->job_offer_id) ?></td>
                            <td><?= h($application->candidate_id) ?></td>
                            <td><?= h($application->cv_url) ?></td>
                            <td><?= h($application->motivation_letter) ?></td>
                            <td><?= h($application->status) ?></td>
                            <td><?= h($application->applied_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Applications', 'action' => 'view', $application->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Applications', 'action' => 'edit', $application->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Applications', 'action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>