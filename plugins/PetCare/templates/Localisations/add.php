<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $localisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Localisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="localisations form content">
            <?= $this->Form->create($localisation) ?>
            <fieldset>
                <legend><?= __('Add Localisation') ?></legend>
                <?php
                    echo $this->Form->control('ville');
                    echo $this->Form->control('wilaya');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
