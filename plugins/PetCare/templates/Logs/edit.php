<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $log
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $log->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $log->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="logs form content">
            <?= $this->Form->create($log) ?>
            <fieldset>
                <legend><?= __('Edit Log') ?></legend>
                <?php
                    echo $this->Form->control('id_animal');
                    echo $this->Form->control('id_admin');
                    echo $this->Form->control('action');
                    echo $this->Form->control('raison_refus');
                    echo $this->Form->control('date_action', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
