<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $animal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $animal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Animals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="animals form content">
            <?= $this->Form->create($animal) ?>
            <fieldset>
                <legend><?= __('Edit Animal') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('type');
                    echo $this->Form->control('age');
                    echo $this->Form->control('health_record');
                    echo $this->Form->control('photo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
