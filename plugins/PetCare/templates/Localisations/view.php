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
            <?= $this->Html->link(__('Edit Localisation'), ['action' => 'edit', $localisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Localisation'), ['action' => 'delete', $localisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $localisation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Localisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Localisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="localisations view content">
            <h3><?= h($localisation->ville) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= h($localisation->ville) ?></td>
                </tr>
                <tr>
                    <th><?= __('Wilaya') ?></th>
                    <td><?= h($localisation->wilaya) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($localisation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>