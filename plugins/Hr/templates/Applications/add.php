<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $application
 * @var \Cake\Collection\CollectionInterface|string[] $jobOffers
 * @var \Cake\Collection\CollectionInterface|string[] $candidates
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="applications form content">
            <?= $this->Form->create($application) ?>
            <fieldset>
                <legend><?= __('Add Application') ?></legend>
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
