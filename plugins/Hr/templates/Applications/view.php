<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $application
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Application'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="applications view content">
            <h3><?= h($application->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Job Offer') ?></th>
                    <td><?= $application->hasValue('job_offer') ? $this->Html->link($application->job_offer->title, ['controller' => 'JobOffers', 'action' => 'view', $application->job_offer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Candidate') ?></th>
                    <td><?= $application->hasValue('candidate') ? $this->Html->link($application->candidate->state, ['controller' => 'Candidates', 'action' => 'view', $application->candidate->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cv Url') ?></th>
                    <td><?= h($application->cv_url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($application->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($application->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Applied At') ?></th>
                    <td><?= h($application->applied_at) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Motivation Letter') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($application->motivation_letter)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Interviews') ?></h4>
                <?php if (!empty($application->interviews)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Application Id') ?></th>
                            <th><?= __('Interview Date') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($application->interviews as $interview) : ?>
                        <tr>
                            <td><?= h($interview->id) ?></td>
                            <td><?= h($interview->application_id) ?></td>
                            <td><?= h($interview->interview_date) ?></td>
                            <td><?= h($interview->comment) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Interviews', 'action' => 'view', $interview->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Interviews', 'action' => 'edit', $interview->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Interviews', 'action' => 'delete', $interview->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interview->id)]) ?>
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