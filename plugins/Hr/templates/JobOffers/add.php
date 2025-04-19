<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $jobOffer
 * @var \Cake\Collection\CollectionInterface|string[] $hrs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Job Offers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobOffers form content">
            <?= $this->Form->create($jobOffer) ?>
            <fieldset>
                <legend><?= __('Add Job Offer') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('salary');
                    echo $this->Form->control('contract_type');
                    echo $this->Form->control('deadline', ['empty' => true]);
                    echo $this->Form->control('status');
                    echo $this->Form->control('hr_id', ['options' => $hrs]);
                    echo $this->Form->control('created_at', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
