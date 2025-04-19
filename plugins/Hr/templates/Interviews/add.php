<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $interview
 * @var \Cake\Collection\CollectionInterface|string[] $applications
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Interviews'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="interviews form content">
            <?= $this->Form->create($interview) ?>
            <fieldset>
                <legend><?= __('Add Interview') ?></legend>
                <?php
                    echo $this->Form->control('application_id', ['options' => $applications]);
                    echo $this->Form->control('interview_date');
                    echo $this->Form->control('comment');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
