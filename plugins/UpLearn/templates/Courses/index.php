<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $courses
 */
?>
<div class="courses index content">
    <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Courses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('picture') ?></th>
                    <th><?= $this->Paginator->sort('categorie_id') ?></th>
                    <th><?= $this->Paginator->sort('file_path') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('level') ?></th>
                    <th><?= $this->Paginator->sort('lesseons') ?></th>
                    <th><?= $this->Paginator->sort('pages') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?= $this->Number->format($course->id) ?></td>
                    <td><?= $course->hasValue('user') ? $this->Html->link($course->user->fullname, ['controller' => 'Users', 'action' => 'view', $course->user->id]) : '' ?></td>
                    <td><?= h($course->name) ?></td>
                    <td><?= h($course->picture) ?></td>
                    <td><?= $course->hasValue('category') ? $this->Html->link($course->category->name, ['controller' => 'Categories', 'action' => 'view', $course->category->id]) : '' ?></td>
                    <td><?= h($course->file_path) ?></td>
                    <td><?= h($course->status) ?></td>
                    <td><?= h($course->level) ?></td>
                    <td><?= $course->lesseons === null ? '' : $this->Number->format($course->lesseons) ?></td>
                    <td><?= $course->pages === null ? '' : $this->Number->format($course->pages) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $course->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $course->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $course->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $course->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>