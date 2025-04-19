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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $localisation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $localisation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Localisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="localisations form content">
            <?= $this->Form->create($localisation) ?>
            <fieldset>
                <legend><?= __('Edit Localisation') ?></legend>
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
