<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $application
 * @var string[]|\Cake\Collection\CollectionInterface $jobOffers
 * @var string[]|\Cake\Collection\CollectionInterface $candidates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $application->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $application->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="applications form content">
            <?= $this->Form->create($application) ?>
            <fieldset>
                <legend><?= __('Edit Application') ?></legend>
                <?php
                    echo $this->Form->control('job_offer_id', ['options' => $jobOffers]);
                    echo $this->Form->control('candidate_id', ['options' => $candidates]);
                    echo $this->Form->control('cv_url');
                    echo $this->Form->control('motivation_letter');
                    echo $this->Form->control('status');
                    echo $this->Form->control('applied_at', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
