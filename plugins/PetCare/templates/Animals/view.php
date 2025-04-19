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
                    <th><?= __('Name') ?></th>
                    <td><?= h($animal->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($animal->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($animal->photo) ?></td>
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
            <div class="text">
                <strong><?= __('Health Record') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($animal->health_record)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Announcements') ?></h4>
                <?php if (!empty($animal->announcements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Animal Id') ?></th>
                            <th><?= __('Validate User') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($animal->announcements as $announcement) : ?>
                        <tr>
                            <td><?= h($announcement->id) ?></td>
                            <td><?= h($announcement->state) ?></td>
                            <td><?= h($announcement->description) ?></td>
                            <td><?= h($announcement->price) ?></td>
                            <td><?= h($announcement->title) ?></td>
                            <td><?= h($announcement->user_id) ?></td>
                            <td><?= h($announcement->animal_id) ?></td>
                            <td><?= h($announcement->validate_user) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Announcements', 'action' => 'view', $announcement->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Announcements', 'action' => 'edit', $announcement->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Announcements', 'action' => 'delete', $announcement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcement->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>