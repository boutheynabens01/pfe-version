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
            <?= $this->Html->link(__('Edit Animal'), ['action' => 'edit', $animal->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Animal'), ['action' => 'delete', $animal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Animals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Animal'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="animals view content">
            <h3><?= h($animal->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($animal->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($animal->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Healthrecord') ?></th>
                    <td><?= h($animal->healthrecord) ?></td>
                </tr>
                <tr>
                    <th><?= __('Picture') ?></th>
                    <td><?= h($animal->picture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($animal->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age') ?></th>
                    <td><?= $animal->age === null ? '' : $this->Number->format($animal->age) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>