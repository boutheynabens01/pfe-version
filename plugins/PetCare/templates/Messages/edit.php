<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $message
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $message->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $message->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Messages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="messages form content">
            <?= $this->Form->create($message) ?>
            <fieldset>
                <legend><?= __('Edit Message') ?></legend>
                <?php
                    echo $this->Form->control('id_envoyeur');
                    echo $this->Form->control('id_receveur');
                    echo $this->Form->control('contenu');
                    echo $this->Form->control('date_envoi', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
