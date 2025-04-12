<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $department
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Departments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Department'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="departments view content">
            <h3><?= h($department->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($department->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($department->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($department->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($department->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($department->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Jobs') ?></h4>
                <?php if (!empty($department->jobs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Qualification Required') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Benefits') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($department->jobs as $job) : ?>
                        <tr>
                            <td><?= h($job->id) ?></td>
                            <td><?= h($job->title) ?></td>
                            <td><?= h($job->code) ?></td>
                            <td><?= h($job->qualification_required) ?></td>
                            <td><?= h($job->state) ?></td>
                            <td><?= h($job->description) ?></td>
                            <td><?= h($job->benefits) ?></td>
                            <td><?= h($job->department_id) ?></td>
                            <td><?= h($job->created) ?></td>
                            <td><?= h($job->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Jobs', 'action' => 'view', $job->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Jobs', 'action' => 'edit', $job->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Jobs', 'action' => 'delete', $job->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $job->id),
                                    ]
                                ) ?>
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