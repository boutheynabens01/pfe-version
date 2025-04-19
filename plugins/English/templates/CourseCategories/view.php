<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $courseCategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course Category'), ['action' => 'edit', $courseCategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course Category'), ['action' => 'delete', $courseCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseCategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Course Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course Category'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="courseCategories view content">
            <h3><?= h($courseCategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($courseCategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($courseCategory->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($courseCategory->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>