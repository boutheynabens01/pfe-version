<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $adoption
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adoption->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adoption->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Adoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="adoptions form content">
            <?= $this->Form->create($adoption) ?>
            <fieldset>
                <legend><?= __('Edit Adoption') ?></legend>
                <?php
                    echo $this->Form->control('id_animal');
                    echo $this->Form->control('id_adoptant');
                    echo $this->Form->control('date_adoption', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
