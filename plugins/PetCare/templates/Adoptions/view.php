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
            <?= $this->Html->link(__('Edit Adoption'), ['action' => 'edit', $adoption->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Adoption'), ['action' => 'delete', $adoption->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adoption->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Adoptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Adoption'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="adoptions view content">
            <h3><?= h($adoption->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($adoption->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Animal') ?></th>
                    <td><?= $this->Number->format($adoption->id_animal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Adoptant') ?></th>
                    <td><?= $this->Number->format($adoption->id_adoptant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Adoption') ?></th>
                    <td><?= h($adoption->date_adoption) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>