<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $job
 * @var \Cake\Collection\CollectionInterface|string[] $departments
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Jobs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jobs form content">
            <?= $this->Form->create($job) ?>
            <fieldset>
                <legend><?= __('Add Job') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('code');
                    echo $this->Form->control('qualification_required');
                    echo $this->Form->control('state');
                    echo $this->Form->control('description');
                    echo $this->Form->control('benefits');
                    echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
